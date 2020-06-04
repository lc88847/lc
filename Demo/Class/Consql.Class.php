<?php
include_once("IconnectInfo.php");
class Consql implements IconnectInfo
{
    private $server=IconnectInfo::Host;
    private $uname=IconnectInfo::UNAME;
    private $pw=IconnectInfo::PW;
    private $dbname=IconnectInfo::DBNAME;
    public function testConnection()
    {
        $link=mysqli_connect($this->server,$this->uname,$this->pw,$this->dbname);
        if(mysqli_connect_error())
        {
            die('连接数据库失败,....');
        }


        // TODO: Implement testConnection() method.
    }
    public function doWork(IconnectInfo $iconnectInfo)
    {
        $iconnectInfo->testConnection();
    }
}
$conn=new Consql();
$conn->testConnection();
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019-01-28
 * Time: 20:16
 */