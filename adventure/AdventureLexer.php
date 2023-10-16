<?php

/*
 * Generated from Adventure.g4 by ANTLR 4.13.1
 */

namespace {
	use Antlr\Antlr4\Runtime\Atn\ATNDeserializer;
	use Antlr\Antlr4\Runtime\Atn\LexerATNSimulator;
	use Antlr\Antlr4\Runtime\Lexer;
	use Antlr\Antlr4\Runtime\CharStream;
	use Antlr\Antlr4\Runtime\PredictionContexts\PredictionContextCache;
	use Antlr\Antlr4\Runtime\RuleContext;
	use Antlr\Antlr4\Runtime\Atn\ATN;
	use Antlr\Antlr4\Runtime\Dfa\DFA;
	use Antlr\Antlr4\Runtime\Vocabulary;
	use Antlr\Antlr4\Runtime\RuntimeMetaData;
	use Antlr\Antlr4\Runtime\VocabularyImpl;

	final class AdventureLexer extends Lexer
	{
		public const T__0 = 1, T__1 = 2, T__2 = 3, T__3 = 4, T__4 = 5, T__5 = 6, 
               T__6 = 7, T__7 = 8, ID = 9, STRING = 10, NUMBER = 11, INDENT = 12, 
               DEDENT = 13, WS = 14;

		/**
		 * @var array<string>
		 */
		public const CHANNEL_NAMES = [
			'DEFAULT_TOKEN_CHANNEL', 'HIDDEN'
		];

		/**
		 * @var array<string>
		 */
		public const MODE_NAMES = [
			'DEFAULT_MODE'
		];

		/**
		 * @var array<string>
		 */
		public const RULE_NAMES = [
			'T__0', 'T__1', 'T__2', 'T__3', 'T__4', 'T__5', 'T__6', 'T__7', 'ID', 
			'STRING', 'NUMBER', 'INDENT', 'DEDENT', 'WS'
		];

		/**
		 * @var array<string|null>
		 */
		private const LITERAL_NAMES = [
		    null, "'var'", "'='", "'move to'", "'take'", "'if'", "':'", "'repeat'", 
		    "'until'", null, null, null, null, "'\\n'"
		];

		/**
		 * @var array<string>
		 */
		private const SYMBOLIC_NAMES = [
		    null, null, null, null, null, null, null, null, null, "ID", "STRING", 
		    "NUMBER", "INDENT", "DEDENT", "WS"
		];

		private const SERIALIZED_ATN =
			[4, 0, 14, 113, 6, -1, 2, 0, 7, 0, 2, 1, 7, 1, 2, 2, 7, 2, 2, 3, 7, 3, 
		    2, 4, 7, 4, 2, 5, 7, 5, 2, 6, 7, 6, 2, 7, 7, 7, 2, 8, 7, 8, 2, 9, 
		    7, 9, 2, 10, 7, 10, 2, 11, 7, 11, 2, 12, 7, 12, 2, 13, 7, 13, 1, 0, 
		    1, 0, 1, 0, 1, 0, 1, 1, 1, 1, 1, 2, 1, 2, 1, 2, 1, 2, 1, 2, 1, 2, 
		    1, 2, 1, 2, 1, 3, 1, 3, 1, 3, 1, 3, 1, 3, 1, 4, 1, 4, 1, 4, 1, 5, 
		    1, 5, 1, 6, 1, 6, 1, 6, 1, 6, 1, 6, 1, 6, 1, 6, 1, 7, 1, 7, 1, 7, 
		    1, 7, 1, 7, 1, 7, 1, 8, 1, 8, 5, 8, 69, 8, 8, 10, 8, 12, 8, 72, 9, 
		    8, 1, 9, 1, 9, 5, 9, 76, 8, 9, 10, 9, 12, 9, 79, 9, 9, 1, 9, 1, 9, 
		    1, 10, 3, 10, 84, 8, 10, 1, 10, 4, 10, 87, 8, 10, 11, 10, 12, 10, 
		    88, 1, 10, 1, 10, 5, 10, 93, 8, 10, 10, 10, 12, 10, 96, 9, 10, 3, 
		    10, 98, 8, 10, 1, 11, 4, 11, 101, 8, 11, 11, 11, 12, 11, 102, 1, 12, 
		    1, 12, 1, 13, 4, 13, 108, 8, 13, 11, 13, 12, 13, 109, 1, 13, 1, 13, 
		    0, 0, 14, 1, 1, 3, 2, 5, 3, 7, 4, 9, 5, 11, 6, 13, 7, 15, 8, 17, 9, 
		    19, 10, 21, 11, 23, 12, 25, 13, 27, 14, 1, 0, 5, 3, 0, 65, 90, 95, 
		    95, 97, 122, 4, 0, 48, 57, 65, 90, 95, 95, 97, 122, 3, 0, 10, 10, 
		    13, 13, 34, 34, 1, 0, 48, 57, 2, 0, 13, 13, 32, 32, 120, 0, 1, 1, 
		    0, 0, 0, 0, 3, 1, 0, 0, 0, 0, 5, 1, 0, 0, 0, 0, 7, 1, 0, 0, 0, 0, 
		    9, 1, 0, 0, 0, 0, 11, 1, 0, 0, 0, 0, 13, 1, 0, 0, 0, 0, 15, 1, 0, 
		    0, 0, 0, 17, 1, 0, 0, 0, 0, 19, 1, 0, 0, 0, 0, 21, 1, 0, 0, 0, 0, 
		    23, 1, 0, 0, 0, 0, 25, 1, 0, 0, 0, 0, 27, 1, 0, 0, 0, 1, 29, 1, 0, 
		    0, 0, 3, 33, 1, 0, 0, 0, 5, 35, 1, 0, 0, 0, 7, 43, 1, 0, 0, 0, 9, 
		    48, 1, 0, 0, 0, 11, 51, 1, 0, 0, 0, 13, 53, 1, 0, 0, 0, 15, 60, 1, 
		    0, 0, 0, 17, 66, 1, 0, 0, 0, 19, 73, 1, 0, 0, 0, 21, 83, 1, 0, 0, 
		    0, 23, 100, 1, 0, 0, 0, 25, 104, 1, 0, 0, 0, 27, 107, 1, 0, 0, 0, 
		    29, 30, 5, 118, 0, 0, 30, 31, 5, 97, 0, 0, 31, 32, 5, 114, 0, 0, 32, 
		    2, 1, 0, 0, 0, 33, 34, 5, 61, 0, 0, 34, 4, 1, 0, 0, 0, 35, 36, 5, 
		    109, 0, 0, 36, 37, 5, 111, 0, 0, 37, 38, 5, 118, 0, 0, 38, 39, 5, 
		    101, 0, 0, 39, 40, 5, 32, 0, 0, 40, 41, 5, 116, 0, 0, 41, 42, 5, 111, 
		    0, 0, 42, 6, 1, 0, 0, 0, 43, 44, 5, 116, 0, 0, 44, 45, 5, 97, 0, 0, 
		    45, 46, 5, 107, 0, 0, 46, 47, 5, 101, 0, 0, 47, 8, 1, 0, 0, 0, 48, 
		    49, 5, 105, 0, 0, 49, 50, 5, 102, 0, 0, 50, 10, 1, 0, 0, 0, 51, 52, 
		    5, 58, 0, 0, 52, 12, 1, 0, 0, 0, 53, 54, 5, 114, 0, 0, 54, 55, 5, 
		    101, 0, 0, 55, 56, 5, 112, 0, 0, 56, 57, 5, 101, 0, 0, 57, 58, 5, 
		    97, 0, 0, 58, 59, 5, 116, 0, 0, 59, 14, 1, 0, 0, 0, 60, 61, 5, 117, 
		    0, 0, 61, 62, 5, 110, 0, 0, 62, 63, 5, 116, 0, 0, 63, 64, 5, 105, 
		    0, 0, 64, 65, 5, 108, 0, 0, 65, 16, 1, 0, 0, 0, 66, 70, 7, 0, 0, 0, 
		    67, 69, 7, 1, 0, 0, 68, 67, 1, 0, 0, 0, 69, 72, 1, 0, 0, 0, 70, 68, 
		    1, 0, 0, 0, 70, 71, 1, 0, 0, 0, 71, 18, 1, 0, 0, 0, 72, 70, 1, 0, 
		    0, 0, 73, 77, 5, 34, 0, 0, 74, 76, 8, 2, 0, 0, 75, 74, 1, 0, 0, 0, 
		    76, 79, 1, 0, 0, 0, 77, 75, 1, 0, 0, 0, 77, 78, 1, 0, 0, 0, 78, 80, 
		    1, 0, 0, 0, 79, 77, 1, 0, 0, 0, 80, 81, 5, 34, 0, 0, 81, 20, 1, 0, 
		    0, 0, 82, 84, 5, 45, 0, 0, 83, 82, 1, 0, 0, 0, 83, 84, 1, 0, 0, 0, 
		    84, 86, 1, 0, 0, 0, 85, 87, 7, 3, 0, 0, 86, 85, 1, 0, 0, 0, 87, 88, 
		    1, 0, 0, 0, 88, 86, 1, 0, 0, 0, 88, 89, 1, 0, 0, 0, 89, 97, 1, 0, 
		    0, 0, 90, 94, 5, 46, 0, 0, 91, 93, 7, 3, 0, 0, 92, 91, 1, 0, 0, 0, 
		    93, 96, 1, 0, 0, 0, 94, 92, 1, 0, 0, 0, 94, 95, 1, 0, 0, 0, 95, 98, 
		    1, 0, 0, 0, 96, 94, 1, 0, 0, 0, 97, 90, 1, 0, 0, 0, 97, 98, 1, 0, 
		    0, 0, 98, 22, 1, 0, 0, 0, 99, 101, 5, 9, 0, 0, 100, 99, 1, 0, 0, 0, 
		    101, 102, 1, 0, 0, 0, 102, 100, 1, 0, 0, 0, 102, 103, 1, 0, 0, 0, 
		    103, 24, 1, 0, 0, 0, 104, 105, 5, 10, 0, 0, 105, 26, 1, 0, 0, 0, 106, 
		    108, 7, 4, 0, 0, 107, 106, 1, 0, 0, 0, 108, 109, 1, 0, 0, 0, 109, 
		    107, 1, 0, 0, 0, 109, 110, 1, 0, 0, 0, 110, 111, 1, 0, 0, 0, 111, 
		    112, 6, 13, 0, 0, 112, 28, 1, 0, 0, 0, 9, 0, 70, 77, 83, 88, 94, 97, 
		    102, 109, 1, 6, 0, 0];
		protected static $atn;
		protected static $decisionToDFA;
		protected static $sharedContextCache;
		public function __construct(CharStream $input)
		{
			parent::__construct($input);

			self::initialize();

			$this->interp = new LexerATNSimulator($this, self::$atn, self::$decisionToDFA, self::$sharedContextCache);
		}

		private static function initialize(): void
		{
			if (self::$atn !== null) {
				return;
			}

			RuntimeMetaData::checkVersion('4.13.1', RuntimeMetaData::VERSION);

			$atn = (new ATNDeserializer())->deserialize(self::SERIALIZED_ATN);

			$decisionToDFA = [];
			for ($i = 0, $count = $atn->getNumberOfDecisions(); $i < $count; $i++) {
				$decisionToDFA[] = new DFA($atn->getDecisionState($i), $i);
			}

			self::$atn = $atn;
			self::$decisionToDFA = $decisionToDFA;
			self::$sharedContextCache = new PredictionContextCache();
		}

		public static function vocabulary(): Vocabulary
		{
			static $vocabulary;

			return $vocabulary = $vocabulary ?? new VocabularyImpl(self::LITERAL_NAMES, self::SYMBOLIC_NAMES);
		}

		public function getGrammarFileName(): string
		{
			return 'Adventure.g4';
		}

		public function getRuleNames(): array
		{
			return self::RULE_NAMES;
		}

		public function getSerializedATN(): array
		{
			return self::SERIALIZED_ATN;
		}

		/**
		 * @return array<string>
		 */
		public function getChannelNames(): array
		{
			return self::CHANNEL_NAMES;
		}

		/**
		 * @return array<string>
		 */
		public function getModeNames(): array
		{
			return self::MODE_NAMES;
		}

		public function getATN(): ATN
		{
			return self::$atn;
		}

		public function getVocabulary(): Vocabulary
		{
			return self::vocabulary();
		}
	}
}