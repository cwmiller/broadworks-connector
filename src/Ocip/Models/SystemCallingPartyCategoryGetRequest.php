<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCallingPartyCategoryGetRequest
 *
 * Get an existing Calling Party Category in system.
 *         The response is either a SystemCallingPartyCategoryGetResponse or an
 * ErrorResponse.
 *
 * @see SystemCallingPartyCategoryGetResponse
 * @see ErrorResponse
 */
class SystemCallingPartyCategoryGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName category
     * @var string|null
     */
    private $category = null;

    /**
     * Getter for category
     *
     * @ElementName category
     * @return string|null
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Setter for category
     *
     * @ElementName category
     * @param string|null $category
     * @return $this
     */
    public function setCategory($category)
    {
        $this->category = $category;
        return $this;
    }


}

