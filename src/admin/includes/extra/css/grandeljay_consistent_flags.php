<?php

/**
 * Consistent Flags
 *
 * @author  Jay Trees <consistent-flags@grandels.email>
 * @link    https://github.com/grandeljay/modified-consistent-flags
 * @package GrandelJayConsistentFlags
 */

$is_enabled = defined('MODULE_GRANDELJAY_CONSISTENT_FLAGS_STATUS') && 'true' === MODULE_GRANDELJAY_CONSISTENT_FLAGS_STATUS;

if (false === $is_enabled) {
    return;
}

$filename = 'includes/css/grandeljay_consistent_flags.css';
$version  = hash_file('crc32c', DIR_FS_ADMIN . $filename);
?>
<link rel="stylesheet" type="text/css" href="<?php echo DIR_WS_ADMIN . $filename ?>?v=<?php echo $version ?>" />
