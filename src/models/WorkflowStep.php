<?php namespace Byznaga\Task\Models;

use Byznaga\Oregano\Models\Oregano as OreganoModel;

class WorkflowStep extends OreganoModel {

    protected $table = 'workflow_steps';
    public $timestamps = false;

}