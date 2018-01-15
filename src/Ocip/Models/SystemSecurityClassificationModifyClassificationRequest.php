<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemSecurityClassificationModifyClassificationRequest
 *
 * Modify a Security Classification
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemSecurityClassificationModifyClassificationRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName securityClassificationName
     * @var string|null
     */
    private $securityClassificationName = null;

    /**
     * @ElementName newSecurityClassificationName
     * @var string|null
     */
    private $newSecurityClassificationName = null;

    /**
     * @ElementName audioFile
     * @var \CWM\BroadWorksConnector\Ocip\Models\LabeledMediaFileResource|null
     */
    private $audioFile = null;

    /**
     * Getter for securityClassificationName
     *
     * @ElementName securityClassificationName
     * @return string|null
     */
    public function getSecurityClassificationName()
    {
        return $this->securityClassificationName;
    }

    /**
     * Setter for securityClassificationName
     *
     * @ElementName securityClassificationName
     * @param string|null $securityClassificationName
     * @return $this
     */
    public function setSecurityClassificationName($securityClassificationName)
    {
        $this->securityClassificationName = $securityClassificationName;
        return $this;
    }

    /**
     * Getter for newSecurityClassificationName
     *
     * @ElementName newSecurityClassificationName
     * @return string|null
     */
    public function getNewSecurityClassificationName()
    {
        return $this->newSecurityClassificationName;
    }

    /**
     * Setter for newSecurityClassificationName
     *
     * @ElementName newSecurityClassificationName
     * @param string|null $newSecurityClassificationName
     * @return $this
     */
    public function setNewSecurityClassificationName($newSecurityClassificationName)
    {
        $this->newSecurityClassificationName = $newSecurityClassificationName;
        return $this;
    }

    /**
     * Getter for audioFile
     *
     * @ElementName audioFile
     * @return \CWM\BroadWorksConnector\Ocip\Models\LabeledMediaFileResource|null
     */
    public function getAudioFile()
    {
        return $this->audioFile;
    }

    /**
     * Setter for audioFile
     *
     * @ElementName audioFile
     * @param \CWM\BroadWorksConnector\Ocip\Models\LabeledMediaFileResource|null $audioFile
     * @return $this
     */
    public function setAudioFile($audioFile)
    {
        $this->audioFile = $audioFile;
        return $this;
    }


}

