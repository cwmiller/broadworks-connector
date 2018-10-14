<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CallCenterReportTemplateKey
 *
 * Uniquely identifies a call center report template created in the system.
 */
class CallCenterReportTemplateKey
{

    /**
     * @ElementName templateLevel
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportTemplateLevel|null
     */
    private $templateLevel = null;

    /**
     * @ElementName templateName
     * @var string|null
     */
    private $templateName = null;

    /**
     * Getter for templateLevel
     *
     * @ElementName templateLevel
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportTemplateLevel|null
     */
    public function getTemplateLevel()
    {
        return $this->templateLevel;
    }

    /**
     * Setter for templateLevel
     *
     * @ElementName templateLevel
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportTemplateLevel|null $templateLevel
     * @return $this
     */
    public function setTemplateLevel(\CWM\BroadWorksConnector\Ocip\Models\CallCenterReportTemplateLevel $templateLevel)
    {
        $this->templateLevel = $templateLevel;
        return $this;
    }

    /**
     * Getter for templateName
     *
     * @ElementName templateName
     * @return string|null
     */
    public function getTemplateName()
    {
        return $this->templateName;
    }

    /**
     * Setter for templateName
     *
     * @ElementName templateName
     * @param string|null $templateName
     * @return $this
     */
    public function setTemplateName($templateName)
    {
        $this->templateName = $templateName;
        return $this;
    }


}

