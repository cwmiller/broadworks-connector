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
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallingPartyCategorySelection|null
     */
    private $category = null;

    /**
     * Getter for category
     *
     * @ElementName category
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallingPartyCategorySelection|null
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Setter for category
     *
     * @ElementName category
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallingPartyCategorySelection|null $category
     * @return $this
     */
    public function setCategory(\CWM\BroadWorksConnector\Ocip\Models\CallingPartyCategorySelection $category)
    {
        $this->category = $category;
        return $this;
    }


}

