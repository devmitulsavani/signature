<?php

class Login_model extends MY_Model {

    function __construct() {
        parent::__construct();
    }

    /**
     * Used to check Super admin/Business user login credentials is correct or wrong
     * @param string $email Email id of Super admin/Business user
     * @param string $password Password 
     * @return result of array if success else retrun false
     * */
    public function get_user($email, $password) {
        $this->db->select('u.*,uc.mobile_number, uc.website, uc.profile_pic, uc.phone_number, uc.fax, uc.address, uc.address_line2, uc.profile_pic, u.company, u.title, uc.id AS contact_detail_id');
        $this->db->join('users_contact_details uc', 'uc.user_id = u.id', 'LEFT');
        $this->db->where('u.email', $email);
        $this->db->where('u.password', md5($password));
        // $this->db->where('u.is_verified', 1);
        // $this->db->where('u.is_active', 1);    
        $this->db->where('u.is_delete', 0);
        $query = $this->db->get('users u');
        return $query->row_array();
    }

    /**
     * check_valid_email()
     * @uses check entered email is valid or not
     * @param string @email email of user
     * @author KAMLESH POKIYA 
     **/
    public function check_valid_email($where){
        $this->db->select('*');
        $this->db->where($where, FALSE);
        $this->db->where('user_role', 2);
        $result = $this->db->get('users');
        if($result->result_array()){
            return $result->row_array();
        } else {
            return FALSE;
        }
    }

    /**
     * @method : update_record
     * @uses : This function is used to update record
     * @param : @table, @user_id, @user_array = array of update  
     * @author : KAP
     */
    public function update_record($table, $condition, $user_array) {
        $this->db->where($condition);
        if ($this->db->update($table, $user_array)) {
            return 1;
        } else {
            return 0;
        }
    }
}
