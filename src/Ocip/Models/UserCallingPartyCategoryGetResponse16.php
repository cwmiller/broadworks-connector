<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCallingPartyCategoryGetResponse16
 *
 * Response to UserCallingPartyCategoryGetRequest16.
 *
 * @see UserCallingPartyCategoryGetRequest16
 * @Groups [{"id":"89aa8c9a341a3cccb2453b1ee467bf94:201","type":"sequence"}]
 */
class UserCallingPartyCategoryGetResponse16 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName category
     * @Type string
     * @Group 89aa8c9a341a3cccb2453b1ee467bf94:201
     * @MinLength 1
     * @MaxLength 20
     * @var string|null
     */
    protected $category = null;

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

