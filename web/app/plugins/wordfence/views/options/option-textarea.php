<?php
if (!defined('WORDFENCE_VERSION')) { exit; }
/**
 * Presents a text area option.
 *
 * Expects $textOptionName, $textValue, and $title to be defined. $helpLink, $premium, and $noSpacer may also be defined.
 *
 * @var string $textOptionName The option name for the text field.
 * @var string $textValue The current value of $textOptionName.
 * @var string $title The title shown for the option.
 * @var string $helpLink If defined, the link to the corresponding external help page.
 * @var bool $premium If defined, the option will be tagged as premium only and not allow its value to change for free users.
 * @var bool $noSpacer If defined and truthy, the spacer will be omitted.
 */

if (!isset($subtitleHTML) && isset($subtitle)) {
	$subtitleHTML = esc_html($subtitle);
}
?>
<ul class="wf-option wf-option-textarea<?php if (!wfConfig::p() && isset($premium) && $premium) { echo ' wf-option-premium'; } ?>" data-text-option="<?php echo esc_attr($textOptionName); ?>" data-original-text-value="<?php echo esc_attr($textValue); ?>">
	<?php if (!isset($noSpacer) || !$noSpacer): ?>
	<li class="wf-option-spacer"></li>
	<?php endif; ?>
	<li class="wf-option-content">
		<ul>
			<li class="wf-option-title">
				<?php if (isset($subtitleHTML)): ?>
				<ul class="wf-flex-vertical wf-flex-align-left">
					<li>
				<?php endif; ?>
						<?php echo esc_html($title); ?><?php if (!wfConfig::p() && isset($premium) && $premium) { echo ' <a href="https://www.wordfence.com/gnl1optionUpgrade/wordfence-signup/" target="_blank" rel="noopener noreferrer" class="wf-premium-link">' . __('Premium Feature', 'wordfence') . '</a>'; } ?><?php if (isset($helpLink)) { echo ' <a href="' . esc_attr($helpLink) . '"  target="_blank" rel="noopener noreferrer" class="wf-inline-help"><i class="wf-fa wf-fa-question-circle-o" aria-hidden="true"></i></a>'; } ?>
				<?php if (isset($subtitleHTML)): ?>
					</li>
					<li class="wf-option-subtitle"><?php echo $subtitleHTML; ?></li>
				</ul>
				<?php endif; ?>
			</li>
			<li class="wf-option-textarea">
				<textarea<?php echo (!(!wfConfig::p() && isset($premium) && $premium) ? '' : ' disabled'); ?>><?php echo esc_html($textValue); ?></textarea>
			</li>
		</ul>
	</li>
</ul>