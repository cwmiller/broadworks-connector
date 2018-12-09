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
 * @Groups [{"id":"c856d5d86d5da482525eb01056f273da:120","type":"sequence"}]
 */
class SystemCallingPartyCategoryGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName category
     * @Type string
     * @Group c856d5d86d5da482525eb01056f273da:120
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

