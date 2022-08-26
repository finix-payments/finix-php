<?php
namespace Finix\Model;

use ArrayObject;
class FinixList extends ArrayObject {
    private $page;
    private $links;
    private Boolean $hasMore;
    private $listNextBase;

    public function __construct($array, $listNextBase, $hasMore){
        parent::__construct($array, ArrayObject::ARRAY_AS_PROPS);
        $this->listNextBase = $listNextBase;
        $this->hasMore = $hasMore;
    }

    /**
     * Gets page
     *
     * @return \Finix\Model\PageCursor|null
     */
    public function getPage()
    {
        return $this->page;
    }

    /**
     * Sets page
     *
     * @param \Finix\Model\PageCursor|null $page page
     *
     * @return self
     */
    public function setPage($page)
    {
        $this->page = $page;

        return $this;
    }

    /**
     * Gets _links
     *
     * @return \Finix\Model\ListLinks|null
     */
    public function getLinks()
    {
        return $this->links;
    }

    /**
     * Sets _links
     *
     * @param \Finix\Model\ListLinks|null $_links _links
     *
     * @return self
     */
    public function setLinks($_links)
    {
        $this->links = $_links;

        return $this;
    }

    /**
     * Gets _links
     *
     * @return \Finix\Model\ListLinks|null
     */
    public function hasMore()
    {
        return $this->hasMore;
    }

    public function listNext(int $limitVal = null) 
    {
        return call_user_func($this->listNextBase, $limitVal);
    }
}