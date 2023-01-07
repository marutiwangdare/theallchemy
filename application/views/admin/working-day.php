<!DOCTYPE html>
<html>
   <head>
      <?php $this->load->view('admin/includes/admin-meta.php');?>
      <style type="text/css">
    main {
  display: flex;
  flex-direction: column;
  justify-content: center;
  text-align: center;
  transition: opacity ease .3s;
}

main.modal-is-open {
  opacity: .5;
  z-index: -1;
}

header {  
  margin-bottom: 2em;
}

.calendar {
  display: block;
  width:100%;
  margin: 0 auto;
}

footer {
  margin-top: 4em;
}

table {
  width:75%;
  margin:0 auto;
  height:500px;
  border-collapse: collapse;
  text-align: center;
  background: #17181b;
  border-radius: 12px;
  overflow: hidden;
  box-shadow: 2px 4px 12px rgba(0, 0, 0, 0.24);
  transition: box-shadow ease .3s;
}
.class-main
  {
    height:100px;
  }
@media only screen and (max-width: 768px) {
  table {
    width:100%;
    height:350px;
  }
  .class-main
  {
    height:50px;
  }
}

table:hover {
  box-shadow: 4px 8px 32px rgba(0, 0, 0, 0.32);
}

thead {
  background: #ffaf51;
  font-weight: bold;
}


td {
 /* padding: 2rem 5rem;*/
  position: relative;
      font-size: 20px;
    color: #fff;
}

tr.weekDays {
  background: #a76d2a;
  color: #fff;
  font-weight: bold;
}

td.disabled {
  opacity: .25;
  cursor: not-allowed;
}

td.today {
  background: #a2bdcc;
  color: #404040;
  border-radius: 12px;
}

td.schedule-enable {
  cursor: pointer;
}

td.schedule-disable {
  cursor: not-allowed;
}

td.schedule-disable:before {
  content: '';
  width: 30px;
  height: 1px;
  display: block;
  background: #aaa;
  position: absolute;
  transform: rotate(45deg);
  top: 24px;
  left: 10px;
}

td.schedule-disable:after {
  content: '';
  width: 30px;
  height: 1px;
  display: block;
  background: #aaa;
  position: absolute;
  transform: rotate(-45deg);
  top: 24px;
  left: 10px;
}
h3
{
    color: #a06927;
}
td.schedule-enable:hover {
  background: #ffaf51;
  border-radius: 12px;
}

td.has-event {
  background: #ffaf51;
  border-radius: 8px;
}

td.has-event:after {
  content: '';
  width: 8px;
  height: 8px;
  display: block;
  background: #17181b;
  border-radius: 8px;
  position: absolute;
  top: 8px;
  right: 8px;
}

.modal {
  position: fixed;
  top: -150%;
  left: 50%;
  transform: translateX(-50%) translateY(-50%);
  width: 400px;
  max-width: 90%;
  height: 180px;
  display: block;
  background: #fff;
  color: #404040;
  box-shadow: 4px 8px 32px rgba(0, 0, 0, 0.32);
  padding: 1em 2em;
  border-radius: 12px;
  transition: top ease .3s;
}

.modal.is-open {
  top: 50%;
}

.modal .close {
  position: absolute;
  top: 0.75em;
  right: 1em;
  border: 0;
  background: transparent;
  padding: 1em;
  font-size: 16px;
  cursor: pointer;
}

.modal h2 {
  margin-top: 0;
}
.modal label {
  margin-top:10px;
  float:left;
}
.modal form {
/*  display: flex;*/
  margin-top:0px;
}

.modal input {
  width: 80%;
  padding: .1em 1em;
  float:right;
 /* border-radius: 12px;*/
  border: 1px solid #aaa;
}

.modal form button {
  padding: .7em 1em;
  border: 0;
  margin-top:10px;
  margin-left: 4px;
  cursor: pointer;
 /* border-radius: 12px;*/
}
.clear
{
    clear:both;
}

.modal .delete, .modal .save {
     background: #17181b;
    color: #fff;
}

.modal .cancel {
  background: #b98241;
    color: #fff;
}
</style>
   </head>
   <body class="skin-black">
      <!-- BEGIN Navbar -->
      <?php $this->load->view('admin/includes/admin-navbar.php');?>
      <!-- END Navbar -->
      <!-- BEGIN Container -->
      <div class="container" id="main-container">
         <!-- BEGIN Sidebar -->
         <?php $this->load->view('admin/includes/admin-sidebar.php');?>
         <!-- END Sidebar -->
         <!-- BEGIN Content -->
         <div id="main-content">
            <!-- BEGIN Main Content -->
            <div class="row">
               <div class="col-md-12">
                  <main id="main">
  <header>
    <h1>Select Working Days</h1>
  </header>
  <div class="calendar" id="calendar"></div>
</main>
<div class="modal" id="modal"></div>
               </div>
            </div>
            <!-- END Main Content -->
            <?php $this->load->view('admin/includes/admin-footer.php');?>
         </div>
         <!-- END Content -->
      </div>
      <!-- END Container -->
      <!--basic scripts-->
      <?php $this->load->view('admin/includes/admin-script.php');?>
       <script type="text/javascript">
  const months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
const weekDays = ['S', 'M', 'T', 'W', 'T', 'F', 'S'];

const today = new Date();
const thisYear = today.getFullYear();
const thisMonth = today.getMonth();
const thisDay = today.getDate();
const thisWeekDay = today.getDay();
const numberOfDays = new Date(thisYear, thisMonth + 1, 0).getDate();
const FirstDayWeekDay = new Date(thisYear, thisMonth, 1).getDay();
const events = {};
var newmonth= thisMonth+1; 
printCalendar();

function printCalendar() {

  // Title
  let html = '<table><thead><tr><td colspan="7" class="class-main">' + months[thisMonth] + ' ' + thisYear + '</td></tr></thead><tbody>';

  // Week Days
  html+= '<tr class="weekDays">';
  html+= weekDays.map(day => '<td>' + day + '</td>').join('');
  html+= '</tr>';

  // empty days before month starts
  html+= '<tr>';
  for (i = 0; i < FirstDayWeekDay; i++) {
    html+= '<td class="disabled">-</td>';
  }
  // Month Days
  let actualWeekDay = FirstDayWeekDay;

  for (var i = 1; i <= numberOfDays; i++) {
    var newdate=thisYear+'-'+newmonth+'-'+i;

    if (actualWeekDay === 7) {
      actualWeekDay = 0;
      html+= '</tr><tr>';  
    }
    let classes = '';

  var day=i;

    if (i >= thisDay) classes += ' schedule-enable'; else classes += ' schedule-disable';
    
    let click = 'null';
    if (i >= thisDay) click = 'handleClick(' + i + ')';

 html+= '<td class=" ' + classes + '" onClick="' + click + '" id="day'+newdate+'">' + i + '</td>';
   
    actualWeekDay++;
  
    $.ajax({
        url : '<?=base_url()?>admin/Working/check_working',
       type: 'post',
        data : {day:day,
          month:months[thisMonth],
          year:thisYear
            },
        cache: false,
         success: function(response){
           //alert(response);
                  $("#day"+response).addClass("has-event");
         }
     });
  }
  
  // empty days before month ends
  for (i = actualWeekDay; i < 7; i++) {
    html+= '<td class="disabled">-</td>';
  }
  
  html+= '</tr>';

  // Closes
  html+= '</tbody></table>';

  document.getElementById('calendar').innerHTML = html;
}

function handleClick(day) {
  const modal = document.getElementById('modal');
  const main = document.getElementById('main');
  modal.classList.add('is-open'); //el.classList.remove(className);
  main.className += ' modal-is-open';
  $.ajax({
      url : '<?=base_url()?>admin/Working/check_working',
       type: 'post',
        data : {day:day,
          month:months[thisMonth],
          year:thisYear
            },
         success: function(response){
           //alert(response);
           $("#dateanswer").text(response);
            let html = '';
 
  if (response !== 'Remove working day') {
     html += '<button class="close" onClick="handleModalClose()">X</button><h3>Remove Working ' + months[thisMonth] + ' ' + day + '</h3><p id="dateanswer"></p><br><p>Do you really want to remove working day.</p><br><form action="<?php echo base_url('admin/Working/daydelete');?>" method="post"><input type="hidden" name="day" value="' + day + '" id="day"/><input type="hidden" name="month" value="' + months[thisMonth] + '" id="month"/><input type="hidden" name="year" value="' + thisYear + '" id="year"/><input type="hidden" name="ins_working" value="ins_working""/><button class="delete"  type="submit">Yes</button><button class="cancel" onClick="handleModalClose(); return false;">No</button></form>';
  } 
  else 
  {
    html += '<button class="close" onClick="handleModalClose()">X</button><h3>Add Working For ' + months[thisMonth] + ' ' + day + '</h3><p id="dateanswer"></p><br><p>Do you want to add ' + months[thisMonth] + ' ' + day + ' as working day?</p><form action="<?php echo base_url('admin/Working/dayinsert');?>" method="post"><input type="hidden" name="day" value="' + day + '" id="day"/><input type="hidden" name="month" value="' + months[thisMonth] + '" id="month"/><input type="hidden" name="year" value="' + thisYear + '" id="year"/><input type="hidden" name="fromtime" id="fromtime" value="09:00" /><input type="hidden" name="totime" value="17:00" /><button class="save" type="submit">Yes</button><button class="cancel" onClick="handleModalClose(); return false;">No</button></form>';
  }

  
  modal.innerHTML = html;
         }
     });
 
}

function handleModalClose() {
  const modal = document.getElementById('modal');
  const main = document.getElementById('main');
  modal.classList.remove('is-open');
  main.classList.remove('modal-is-open');
}

function handleDelete(day) {
  delete events[day];
  handleModalClose();
  printCalendar();
}

function handleSubmit(day) {
  const days = document.getElementById('day');
  events[day] = days.value;
  viewbooking();
  handleModalClose();
  printCalendar();
}

function viewbooking(day) {
    var artistID='<?php echo $_SESSION['adminsno'];?>';
    $.ajax({
       url : "forms/ajax.php?artistID="+artistID+"&day="+day,
       type: "POST",
        data : {
             artistID: artistID,day:day
            },
        cache: false,
         success: function(response){
        
             if (day == response) classes += ' has-event'; 
         }
     });
}
</script>
   </body>
</html>