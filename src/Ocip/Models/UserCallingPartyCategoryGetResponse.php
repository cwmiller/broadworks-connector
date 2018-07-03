<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCallingPartyCategoryGetResponse
 *
 * Response to UserCallingPartyCategoryGetRequest.
 *
 * @see UserCallingPartyCategoryGetRequest
 */
class UserCallingPartyCategoryGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
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

