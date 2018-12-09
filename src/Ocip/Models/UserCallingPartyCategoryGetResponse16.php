<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCallingPartyCategoryGetResponse16
 *
 * Response to UserCallingPartyCategoryGetRequest16.
 *
 * @see UserCallingPartyCategoryGetRequest16
 * @Groups [{"id":"c856d5d86d5da482525eb01056f273da:201","type":"sequence"}]
 */
class UserCallingPartyCategoryGetResponse16 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName category
     * @Type string
     * @Group c856d5d86d5da482525eb01056f273da:201
     * @var string|null
     */
    private $category = null;

    /**
     * Getter for category
     *
     * @return string
     */
    public function getCategory()
    {
        return $this->category instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->category;
    }

    /**
     * Setter for category
     *
     * @param string $category
     * @return $this
     */
    public function setCategory($category)
    {
        $this->category = $category;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCategory()
    {
        $this->category = null;
        return $this;
    }


}

