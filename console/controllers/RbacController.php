<?php
namespace console\controllers;

use Yii;
use yii\helpers\Console;

class RbacController extends \yii\console\Controller {

  public function actionInit(){
      
       $auth = Yii::$app->authManager;
       $auth->removeAll();
       Console::output('Removing All! RBAC.....');
       
       
       
       $ADMIN = $auth->createRole('ADMIN');
       $ADMIN->description = 'ใช้สำหรับการจัดการข้อมูลในระดับเจ้าหน้าที่สูงสุด';
       $auth->add($ADMIN);
       
       $ORTHERADMIN = $auth->createRole('ORTHERADMIN');
       $ORTHERADMIN->description = 'ใช้สำหรับการจัดการข้อมูลในระดับเจ้าหน้าที่';
       $auth->add($ORTHERADMIN);
       
       $STUDENT = $auth->createRole('STUDENT');
       $STUDENT->description = 'ใช้สำหรับการจัดการข้อมูลในระดับนักเรียน';
       $auth->add($STUDENT);
       
       $ASSESSMENT = $auth->createRole('ASSESSMENT');
       $ASSESSMENT->description = 'ใช้สำหรับการจัดการข้อมูลในระดับอาจารย์';
       $auth->add($ASSESSMENT);
       
    $rule = new \common\rbac\AuthorRule();
    $auth->add($rule);
       
       
      $loginToBackend = $auth->createPermission('loginToBackend');
      $loginToBackend->description = 'ล็อกอินเข้าใช้งานส่วน backend';
      $auth->add($loginToBackend);


       $manageUser = $auth->createRole('ManageUser');
       $manageUser->description = 'จัดการข้อมูลผู้ใช้งาน';
       $auth->add($manageUser);
       
      
      
         $auth->addChild($manageUser, $loginToBackend);
         $auth->addChild($ORTHERADMIN, $manageUser);
         $auth->addChild($manageUser, $ASSESSMENT);
         $auth->addChild($manageUser, $STUDENT);
         $auth->addChild($ADMIN, $ORTHERADMIN);
         
         
         

         
        
         $auth->assign($ADMIN, 1);
         $auth->assign($ORTHERADMIN, 2);
         $auth->assign($ASSESSMENT, 3);
         $auth->assign($STUDENT, 4);
        


        Console::output('Success! RBAC roles has been added.');
  }

}
