<?php
class Home_model extends CI_Model
{
    public function __construct()
    {
       $this->load->database();
    }
    public function select_category()
    {
        $this->db->select('*');
        $this->db->from('tbl_category');
        $this->db->where('status',1);
        $result = $this->db->get();
        return $result->result_array();;
    }
    public function select_new_cupon($cuponcode)
    {
        $this->db->select('*');
        $this->db->from('tbl_cupon');
        $this->db->where('cupon',$cuponcode);
        $result = $this->db->get();
        return $result->result_array();
       // echo $result;
    }
    public function select_cupon()
    {
        $this->db->select('*');
        $this->db->from('tbl_cupon');
        $this->db->where('status',1);
        $result = $this->db->get();
        return $result->result_array();;
    }
    public function select_categorys()
    {
        $this->db->select('*');
        $this->db->from('tbl_category');
        $this->db->where('status',1);
        $this->db->limit(7);  // Produces: LIMIT 15
        $result = $this->db->get();
        return $result->result_array();;
    }
    
    public function select_categorysh()
    {
        $this->db->select('*');
        $this->db->from('tbl_category');
        $this->db->where('status',1);
        $this->db->limit(6);  // Produces: LIMIT 15
        $result = $this->db->get();
        return $result->result_array();;
    }
    public function select_deal()
    {
        $this->db->select('*');
        $this->db->from('tbl_today_deal');
        $this->db->where('status',1);
        $result = $this->db->get();
        return $result->result_array();;
    }
    public function select_product()
    {
        $this->db->select('*');
        $this->db->from('tbl_product');
        $this->db->where('status',1);
        $this->db->limit(4);  // Produces: LIMIT 15
        $result = $this->db->get();
        return $result->result_array();;
    }

    public function select_products($slug)
    {
        $this->db->select('*');
        $this->db->from('tbl_product');
        $this->db->where('status',1);
        $this->db->where('categoryID',$slug);
        $this->db->order_by('productID','desc');
        $result = $this->db->get();
        return $result->result_array();
    }
    
    public function select_products_corporate()
    {
        $this->db->select('*');
        $this->db->from('tbl_product');
        $this->db->where('corporate_status',1);
      //  $this->db->where('categoryID',$slug);
        $this->db->order_by('productID','desc');
        
        $result = $this->db->get();
        return $result->result_array();
    }
    
     public function select_products_anniversary()
    {
        $this->db->select('*');
        $this->db->from('tbl_product');
        $this->db->where('status',1);
      //  $this->db->where('categoryID',$slug);
        $this->db->order_by('productID','desc');
        $this->db->limit(4);
        $result = $this->db->get();
        return $result->result_array();
    }
    public function select_products_detail($slug)
    {
        $this->db->select('*');
        $this->db->from('tbl_product');
        $this->db->where('status',1);
        $this->db->where('web_slug',$slug);
        $result = $this->db->get();
        return $result->result_array();
    }
	public function select_about()
    {
        $this->db->select('*');
        $this->db->from('tbl_about');
        $this->db->where('status',1);
        $this->db->limit('1');
        $result = $this->db->get();
        return $result->row_array();
    }
	public function select_reviews()
    {
        $this->db->select('*');
        $this->db->from('tbl_reviews');
        $this->db->where('status',1);
        $this->db->limit('1');
        $result = $this->db->get();
        return $result->row_array();
    }

    public function select_contact_info()
    {
        $this->db->select('*');
        $this->db->from('tbl_contact_info');
        $this->db->where('status',1);
        $this->db->limit('1');
        $result = $this->db->get();
        return $result->row_array();
    }

    public function select_all_product($category_slug,$subcategory_slug)
    {
        if(!empty($subcategory_slug))
        {
            $this->db->select('*');
            $this->db->from('tbl_category');
            $this->db->where('web_slug',$category_slug);
            $this->db->where('status',1);
            $result = $this->db->get();
            $category=$result->row_array();

            $this->db->select('*');
            $this->db->from('tbl_subcategory');
            $this->db->where('web_slug',$subcategory_slug);
            $this->db->where('status',1);
            $result = $this->db->get();
            $subcategory=$result->row_array();

            $this->db->select('*');
            $this->db->from('tbl_product');
            $this->db->where('categoryID',$category['categoryID']);
            $this->db->where('subcategoryID',$subcategory['subcategoryID']);
            $this->db->where('status',1);
            $this->db->order_by('productID','desc');
            $result = $this->db->get();
            return $result->result_array();
        }
        else
        {
            $this->db->select('*');
            $this->db->from('tbl_category');
            $this->db->where('web_slug',$category_slug);
            $this->db->where('status',1);
            $result = $this->db->get();
            $category=$result->row_array();

            $this->db->select('*');
            $this->db->from('tbl_product');
            $this->db->where('categoryID',$category['categoryID']);
            $this->db->where('status',1);
            $this->db->order_by('productID','desc');
            $result = $this->db->get();
            return $result->result_array();
        }
    }

    public function select_product_detail($category_slug,$subcategory_slug,$product_slug,$productid)
    {
        if(!empty($subcategory_slug))
        {
            $this->db->select('*');
            $this->db->from('tbl_category');
            $this->db->where('web_slug',$category_slug);
            $this->db->where('status',1);
            $result = $this->db->get();
            $category=$result->row_array();

            $this->db->select('*');
            $this->db->from('tbl_subcategory');
            $this->db->where('web_slug',$subcategory_slug);
            $this->db->where('status',1);
            $result = $this->db->get();
            $subcategory=$result->row_array();

            $this->db->select('*');
            $this->db->from('tbl_product');
            $this->db->where('categoryID',$category['categoryID']);
            $this->db->where('subcategoryID',$subcategory['subcategoryID']);
            $this->db->where('web_slug',$product_slug);
            $this->db->where('productID',$productid);
            $this->db->where('status',1);
            $result = $this->db->get();
            return $result->row_array();
        }
        else
        {
            $this->db->select('*');
            $this->db->from('tbl_category');
            $this->db->where('web_slug',$category_slug);
            $this->db->where('status',1);
            $result = $this->db->get();
            $category=$result->row_array();

            $this->db->select('*');
            $this->db->from('tbl_product');
            $this->db->where('categoryID',$category['categoryID']);
            $this->db->where('web_slug',$product_slug);
            $this->db->where('status',1);
            $this->db->where('productID',$productid);
            $result = $this->db->get();
            // echo $str = $this->db->last_query();
            return $result->row_array();
        }
    }

    public function view_search_result($table,$search)
    {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->like('title',$search);
        $this->db->or_like('product_description',$search);
        $this->db->where('status',1);
        $result = $this->db->get();
        return $result->result_array();
    }
    
    public function search_count($table,$search)
    {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->like('title',$search);
        $this->db->or_like('product_description',$search);
        $this->db->where('status',1);
        $result = $this->db->get();
        return $result->num_rows();
    }
	
	 public function getCategory()
    {
        $this->db->from('tbl_category');
        $query=$this->db->get();
        return $query->result();
    }
   
	
	 public function getProduct($categoryID)
    {
        return $this->db->where('categoryID',$categoryID)->get('tbl_product')->result();
		
 
    } 
 
}

