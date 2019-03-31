<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCallingPartyCategoryDeleteRequest
 *
 * Delete a Calling Party Category from system. The category cannot be deleted if it is the default or is in use by any users.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"89aa8c9a341a3cccb2453b1ee467bf94:73","type":"sequence"}]
 */
class SystemCallingPartyCategoryDeleteRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName category
     * @Type string
     * @Group 89aa8c9a341a3cccb2453b1ee467bf94:73
     * @MinLength 1
     * @MaxLength 20
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

