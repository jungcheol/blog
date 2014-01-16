<?php




class LocationInfo extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $location_id;
     
    /**
     *
     * @var integer
     */
    public $parent_id;
     
    /**
     *
     * @var integer
     */
    public $depth;
     
    /**
     *
     * @var string
     */
    public $loc_name;
     
    /**
     *
     * @var integer
     */
    public $active_flag;
     
    /**
     *
     * @var integer
     */
    public $open_time;
     
    /**
     *
     * @var integer
     */
    public $display_order;
     
    /**
     *
     * @var string
     */
    public $hrcode_pattern;
     
    /**
     *
     * @var integer
     */
    public $old_location_id;
     
    /**
     *
     * @var integer
     */
    public $id_type;
     
    /**
     *
     * @var integer
     */
    public $gnb_loc_flag;
     
    /**
     *
     * @var integer
     */
    public $admin_type;
     
    /**
     * Independent Column Mapping.
     */
    public function columnMap()
    {
        return array(
            'location_id' => 'location_id', 
            'parent_id' => 'parent_id', 
            'depth' => 'depth', 
            'loc_name' => 'loc_name', 
            'active_flag' => 'active_flag', 
            'open_time' => 'open_time', 
            'display_order' => 'display_order', 
            'hrcode_pattern' => 'hrcode_pattern', 
            'old_location_id' => 'old_location_id', 
            'id_type' => 'id_type', 
            'gnb_loc_flag' => 'gnb_loc_flag', 
            'admin_type' => 'admin_type'
        );
    }

}
