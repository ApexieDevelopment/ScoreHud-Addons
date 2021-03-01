<?php
declare(strict_types = 1);

/**
 * @name KnockbackFFAAddon
 * @version 1.1.0
 * @main    JackMD\ScoreHud\Addons\KnockbackFFAAddon
 */

// This will probably be on the official ScoreHud Addons

namespace JackMD\ScoreHud\Addons
{

	use JackMD\ScoreHud\addon\AddonBase;
    use pocketmine\Player;
    use ItzLightyHD\KnockbackFFA\EventListener;

	class KnockbackFFAAddon extends AddonBase{

		/**
		 * @param Player $player
		 * @return array
		 */
		public function getProcessedTags(Player $player): array{
			return [
				"{kbffakills}"	       => EventListener::getInstance()->getKillstreak($player->getName())
			];
		}
	}
}
