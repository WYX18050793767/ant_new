<?php
namespace DuxCms\Service;
/**
 * 后台菜单接口
 */
class MenuService{
	/**
	 * 获取菜单结构
	 */
	public function getAdminMenu(){

        //返回菜单
		return array(
            'Content' => array(
                'name' => '内容管理',
                'icon' => 'home',
                'order' => 5,
                'menu' => array(

                )
            ),
        );
	}
	


}
