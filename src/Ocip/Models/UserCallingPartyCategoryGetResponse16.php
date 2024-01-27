<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCallingPartyCategoryGetResponse16
 *
 * Response to UserCallingPartyCategoryGetRequest16.
 *
 * @see UserCallingPartyCategoryGetRequest16
 * @Groups [{"id":"d0efd2493d3062b292fd31759011925e:201","type":"sequence"}]
 */
class UserCallingPartyCategoryGetResponse16 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName category
     * @Type string
     * @Group d0efd2493d3062b292fd31759011925e:201
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

