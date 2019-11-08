<?php

namespace App\Models\System\Attribute;



/**
 *
 */
trait WeightAttribute
{
    /**
     * radio check show this this current default
     */

    public function getDefaultAttribute() {

        if($this->isDefault()){
            return "<label class='badge badge-success'>".__('default' ).'</label>';
        }
        return '';
    }


    /** */
    public function isDefault()
    {
        return $this->is_default == 1;
    }

    public function getEditButtonAttribute()
    {
         return '<a href="'.route('admin.weight.edit', $this).'" class="btn btn-circle btn-success">
                 <i class="fa fa-pencil" data-toggle="tooltip" data-placement="top"'.__('Edit').'"></i></a>';
    }

    /**
     * @return
     * string
     */
    public function getDeleteButtonAttribute() {

        if(!$this->isDefault()){
             return '<a href="" '.route('admin.weight.destroy', $this).'"
                   data-method = "delete"
                   data-trans-button-cancel =" '.__('cancel').'"
                   data-trans-button-confirm=" '.__('delete').'"
                   data-trans-title         =" '.__('are_you_sure').'"
                   class="btn btn-circle btn-danger"><i class="fa fa-trash" data-toggle="tooltip"  data-placement="top"
                   title=" '.__('delete').'"></i></a>' ;
        }
        return '';
    }

    public function getRestoreButtonAttribute()
    {
        return '<a href="'.route('admin.weight.restore', $this).'" name="restore_weight"  class="btn btn-circle btn-primary">
                <i class="fa fa-fresh" data-toggle="tooltip" data-placement="top" title="'.__('restore').'"</i></a>  ';
    }

    public function getDeletePermanentlyButtonAttribute()
    {
       return '<a href= " '.route('admin.weigth.delete-permanently', $this).'" name="delete_weigth permanently" class="btn btn-circle btn-pink">
               <i class="fa fa-trash"  data-toggle="tooltip" data-placement="top" title=" '.__('delete_permanently').'" </i></a> ';
    }

    public function getDefaultButtonAttribute()
    {
       if(!$this->isDefault()){
           return '<a href="'.route('admin.weigth.default', $this).'" class="btn btn-circle btn-warning">
                   <i class="fa fa-check"  data-toggle="tooltip" data-placement="top" title=" '.__('default').'" </i></a> ';
       }
        return '';
    }

    public function getActionButtonsAttribute()
    {
        if ($this->trashed()) {
            return $this->restore_button.$this->delete_permanently_button;
        }

        return
            $this->set_default_button.
            $this->edit_button.
            $this->delete_button;
    }




}


