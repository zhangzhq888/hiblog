<?php

namespace Repositories\Base;

trait BanGongRepository
{

    /**
     * @var \Repositories\BanGong\EntrustRepository
     */
    protected $_bgEntrustRepo;

    /**
     * @return \Repositories\BanGong\EntrustRepository
     */
    public function getBgEntrustRepo()
    {
        if(!$this->_bgEntrustRepo){
            $this->_bgEntrustRepo = \App::make('\Repositories\BanGong\EntrustRepository');
        }
        return $this->_bgEntrustRepo;
    }

}
