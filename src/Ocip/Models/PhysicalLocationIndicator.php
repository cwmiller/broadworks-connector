<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * PhysicalLocationIndicator
 *
 * Choices for how to extract the physical location from the P-Camel-CellDorLAI or
 * P-Access-Network-Info header.
 *         CI indicates that the physical location comes from the Cell
 * Identification (CI) field (5 digits) of the P-Camel-CellDorLAI header (5
 * digits).
 *         LAC-CI indicates that the physical location comes from the Location Area
 * Code + Cell Identification (LAC+CI) fields of the P CAMEL CellIDorLAI header (10
 * digits).
 *         PANI indicates that the physical location comes from the P Network
 * Address Info (PANI) header.  See RFC 3455.
 *
 * @method static PhysicalLocationIndicator CI()
 * @method static PhysicalLocationIndicator LAC_CI()
 * @method static PhysicalLocationIndicator PANI()
 * @method static PhysicalLocationIndicator DISREGARD_ZONES()
 * @ValueType string
 */
class PhysicalLocationIndicator extends \MyCLabs\Enum\Enum
{

    const CI = 'CI';

    const LAC_CI = 'LAC-CI';

    const PANI = 'PANI';

    const DISREGARD_ZONES = 'Disregard Zones';


}

