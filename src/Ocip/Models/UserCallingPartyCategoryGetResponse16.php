<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCallingPartyCategoryGetResponse16
 *
 * Response to UserCallingPartyCategoryGetRequest16.
 *
 * @see UserCallingPartyCategoryGetRequest16
 */
class UserCallingPartyCategoryGetResponse16 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName category
     * @Type string
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

