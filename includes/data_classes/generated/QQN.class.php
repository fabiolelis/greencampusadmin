<?php
	class QQN {
		/**
		 * @return QQNodeCharacteristic
		 */
		static public function Characteristic() {
			return new QQNodeCharacteristic('characteristic', null, null);
		}
		/**
		 * @return QQNodeEvent
		 */
		static public function Event() {
			return new QQNodeEvent('event', null, null);
		}
		/**
		 * @return QQNodeSpecies
		 */
		static public function Species() {
			return new QQNodeSpecies('species', null, null);
		}
		/**
		 * @return QQNodeTree
		 */
		static public function Tree() {
			return new QQNodeTree('tree', null, null);
		}
	}
?>