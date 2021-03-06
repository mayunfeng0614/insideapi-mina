<?php
/**
 * Created by PhpStorm.
 * User: mayunfeng
 * Date: 2018/2/22
 * Time: 14:25
 */

namespace Mayunfeng\InsideMina\User;

use Mayunfeng\InsideMina\Core\AbstractAPI;

class User extends AbstractAPI
{
    const MOBILE = 'user/mobile';    // 判断手机号是否存在
    const REGISTER = 'user/register';    // 用户注册
    const GET_INFO = 'user/getinfo'; // 获取用户信息
    const EDIT_PWD = 'user/editpwd'; // 编辑密码

    const GET_PER_ALL = 'user/getperall';    // 获取全部权限
    const GET_ACC_LIST = 'user/getacclist';  // 获取账户列表

    const GET_ACC_INFO_DJ = 'user/getaccinfodj'; // 获取点睛账户信息
    const GET_ACC_INFO_BD = 'user/getaccinfobd'; // 获取百度账户信息
    const GET_ACC_INFO_WL = 'user/getaccinfowl'; // 获取卧龙账户信息

    const GET_ACC_DJ_REPORTS = 'user/getaccdjreports'; // 获取账户报告


    public function getInfo($params = [])
    {
        return $this->parseJSON(static::POST,[self::GET_INFO,$params]);
    }


    public function mobile($params = [])
    {
        return $this->parseJSON(static::POST,[self::MOBILE,$params]);
    }


    public function register($params = [])
    {
        return $this->parseJSON(static::POST,[self::REGISTER,$params]);
    }


    public function editPwd($params = [])
    {
        return $this->parseJSON(static::POST,[self::EDIT_PWD,$params]);
    }

    public function getAccList($params = [])
    {

        return $this->parseJSON(static::POST,[self::GET_ACC_LIST,$params]);
    }

    public function getPerAll($params = [])
    {
        return $this->parseJSON(static::POST,[self::GET_PER_ALL,$params]);
    }

    public function getAccInfoDj($params = [])
    {
        return $this->parseJSON(static::POST,[self::GET_ACC_INFO_DJ,$params]);
    }

    public function getAccInfoBd($params = [])
    {
        return $this->parseJSON(static::POST,[self::GET_ACC_INFO_BD,$params]);
    }

    public function getAccInfoWl($params = [])
    {
        return $this->parseJSON(static::POST,[self::GET_ACC_INFO_WL,$params]);
    }

    public function getAccReports($params = [])
    {
        return $this->parseJSON(static::POST,[self::GET_ACC_DJ_REPORTS,$params]);
    }
}
