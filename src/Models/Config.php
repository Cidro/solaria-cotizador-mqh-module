<?php
namespace Asimov\Solaria\Modules\CotizadorMqh\Models;

use Illuminate\Database\Eloquent\Model;

class Config extends Model {

    protected $table = 'module_cotizador_mqh_config';

    /**
     * @param $value
     */
    public function setConfigAttribute($value){
        $this->attributes['config'] = json_encode($value, JSON_UNESCAPED_UNICODE);
    }

    /**
     * @param $value
     * @return mixed
     */
    public function getConfigAttribute($value){
        return json_decode($value);
    }

}