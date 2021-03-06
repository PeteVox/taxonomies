<?php
require_once $modx->getOption('manager_path', null, MODX_MANAGER_PATH) . 'controllers/default/resource/create.class.php';

class TaxonomyCreateManagerController extends ResourceCreateManagerController {

    public $resource;


    public function loadCustomCssJs()
    {
        parent::loadCustomCssJs();
        $mgrUrl = $this->modx->getOption('manager_url', null, MODX_MANAGER_URL);
        $assetsUrl = $this->modx->getOption('taxonomies.assets_url', null, MODX_ASSETS_URL . 'components/taxonomies/');
        $this->addCss($assetsUrl . 'css/taxonomies.tree.css');
    }

    public function getLanguageTopics()
    {
        return array('resource', 'taxonomies:default');
    }

    /**
     * Return the pagetitle
     *
     * @return string
     */
    public function getPageTitle()
    {
        return $this->modx->lexicon('taxonomy_new');
    }

    /**
     * Used to set values on the resource record sent to the template for derivative classes
     *
     * @return void
     */
    public function prepareResource()
    {
        //$settings = $this->resource->get('properties');

        $this->resourceArray['pagetitle'] = 'TEs...';

    }
}