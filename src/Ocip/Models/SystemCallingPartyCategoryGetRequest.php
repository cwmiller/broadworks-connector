<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCallingPartyCategoryGetRequest
 *
 * Get an existing Calling Party Category in system.
 *         The response is either a SystemCallingPartyCategoryGetResponse or an ErrorResponse.
 *
 * @see SystemCallingPartyCategoryGetResponse
 * @see ErrorResponse
 * @Groups [{"id":"89aa8c9a341a3cccb2453b1ee467bf94:120","type":"sequence"}]
 */
class SystemCallingPartyCategoryGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName category
     * @Type string
     * @Group 89aa8c9a341a3cccb2453b1ee467bf94:120
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

