<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemXsiApplicationIdDeleteListRequest
 *
 * Delete the entries from system Xsi application Id list.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:19327","type":"sequence"}]
 */
class SystemXsiApplicationIdDeleteListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName xsiApplicationId
     * @Type string
     * @Array
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:19327
     * @MinLength 1
     * @MaxLength 256
     * @var string[]
     */
    private $xsiApplicationId = array(
        
    );

    /**
     * Getter for xsiApplicationId
     *
     * @return string[]
     */
    public function getXsiApplicationId()
    {
        return $this->xsiApplicationId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->xsiApplicationId;
    }

    /**
     * Setter for xsiApplicationId
     *
     * @param string[] $xsiApplicationId
     * @return $this
     */
    public function setXsiApplicationId(array $xsiApplicationId)
    {
        $this->xsiApplicationId = $xsiApplicationId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetXsiApplicationId()
    {
        $this->xsiApplicationId = null;
        return $this;
    }

    /**
     * Adder for xsiApplicationId
     *
     * @param string $xsiApplicationId
     * @return $this
     */
    public function addXsiApplicationId(string $xsiApplicationId)
    {
        $this->xsiApplicationId[] = $xsiApplicationId;
        return $this;
    }


}

