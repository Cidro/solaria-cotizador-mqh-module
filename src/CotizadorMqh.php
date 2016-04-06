<?php
namespace Asimov\Solaria\Modules\CotizadorMqh;

use Solaria\Modules\SolariaModule;

class CotizadorMqh implements SolariaModule {

    protected $name = 'CotizadorMqh';

    protected $menu_name = 'Cotizador Manquehue';

    public function getName() {
        return $this->name;
    }

    public function getMenuName() {
        return $this->menu_name;
    }

    public function getBackendMenuUrl() {
        return url('backend/modules/cotizador-mqh');
    }

    public function getBackendStyles() {
        return [asset('modules/cotizador-mqh/css/cotizador-mqh-module.css')];
    }

    public function getFrontendStyles() {
        // TODO: Implement getFrontendStyles() method.
    }

    public function getBackendScripts() {
        return [asset('modules/cotizador-mqh/js/cotizador-mqh-module.js')];
    }

    public function getFrontendScripts() {
        // TODO: Implement getFrontendScripts() method.
    }

    public function getCustomFields() {
        // TODO: Implement getCustomFields() method.
    }

    public function render(){
        return 'cotizador-mqh';
    }
}