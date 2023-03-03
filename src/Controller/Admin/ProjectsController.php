<?php
namespace App\Controller\Admin;

use App\Controller\AppController;
use App\Form\ContactForm;
use Cake\ORM\TableRegistry;
use Cake\Mailer\Email;
use Cake\Mailer\Mailer;
use Cake\Mailer\TransportFactory;
use Cake\View\View;

class ProjectsController extends AppController{
    public function initialize(): void
    {
        parent::initialize();
         $this->loadModel('UserProfile');
         $this->loadModel('Users');
         $this->loadModel('Projects');
       
    }

    public function unAssignProject(){
        $this->viewBuilder()->setLayout('admin_layout');
        $projects =  $this->paginate($this->Projects->find('all')->where(['assigned_status'=>0,'accept_status'=>0]));
        $users = $this->Users->find('all')->contain('UserProfile')->toArray(); 
        $this->set(compact(['projects','users']));
    }

   
    public function projectView($id = null)
    {
        $project = $this->Projects->get($id, [
            'contain' => ['Users','UserProfile'],
        ]);
        $this->set(compact('project'));
    }
}

?>