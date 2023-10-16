<?php

/*
 * Generated from JSON.g4 by ANTLR 4.13.1
 */

namespace {
	use Antlr\Antlr4\Runtime\Atn\ATN;
	use Antlr\Antlr4\Runtime\Atn\ATNDeserializer;
	use Antlr\Antlr4\Runtime\Atn\ParserATNSimulator;
	use Antlr\Antlr4\Runtime\Dfa\DFA;
	use Antlr\Antlr4\Runtime\Error\Exceptions\FailedPredicateException;
	use Antlr\Antlr4\Runtime\Error\Exceptions\NoViableAltException;
	use Antlr\Antlr4\Runtime\PredictionContexts\PredictionContextCache;
	use Antlr\Antlr4\Runtime\Error\Exceptions\RecognitionException;
	use Antlr\Antlr4\Runtime\RuleContext;
	use Antlr\Antlr4\Runtime\Token;
	use Antlr\Antlr4\Runtime\TokenStream;
	use Antlr\Antlr4\Runtime\Vocabulary;
	use Antlr\Antlr4\Runtime\VocabularyImpl;
	use Antlr\Antlr4\Runtime\RuntimeMetaData;
	use Antlr\Antlr4\Runtime\Parser;
	use Context\JsonContext as JsonContext;
	use Context\ObjContext as ObjContext;
	use Context\PairContext as PairContext;
	use Context\ArrContext as ArrContext;
	use Context\ValueContext as ValueContext;

	final class JSONParser extends Parser
	{
		public const T__0 = 1, T__1 = 2, T__2 = 3, T__3 = 4, T__4 = 5, T__5 = 6,
			T__6 = 7, T__7 = 8, T__8 = 9, STRING = 10, NUMBER = 11, WS = 12;

		public const RULE_json = 0, RULE_obj = 1, RULE_pair = 2, RULE_arr = 3,
			RULE_value = 4;

		/**
		 * @var array<string>
		 */
		public const RULE_NAMES = [
			'json',
			'obj',
			'pair',
			'arr',
			'value'
		];

		/**
		 * @var array<string|null>
		 */
		private const LITERAL_NAMES = [
			null,
			"'{'",
			"','",
			"'}'",
			"':'",
			"'['",
			"']'",
			"'true'",
			"'false'",
			"'null'"
		];

		/**
		 * @var array<string>
		 */
		private const SYMBOLIC_NAMES = [
			null,
			null,
			null,
			null,
			null,
			null,
			null,
			null,
			null,
			null,
			"STRING",
			"NUMBER",
			"WS"
		];

		private const SERIALIZED_ATN =
			[
				4,
				1,
				12,
				57,
				2,
				0,
				7,
				0,
				2,
				1,
				7,
				1,
				2,
				2,
				7,
				2,
				2,
				3,
				7,
				3,
				2,
				4,
				7,
				4,
				1,
				0,
				1,
				0,
				1,
				0,
				1,
				1,
				1,
				1,
				1,
				1,
				1,
				1,
				5,
				1,
				18,
				8,
				1,
				10,
				1,
				12,
				1,
				21,
				9,
				1,
				1,
				1,
				1,
				1,
				1,
				1,
				1,
				1,
				3,
				1,
				27,
				8,
				1,
				1,
				2,
				1,
				2,
				1,
				2,
				1,
				2,
				1,
				3,
				1,
				3,
				1,
				3,
				1,
				3,
				5,
				3,
				37,
				8,
				3,
				10,
				3,
				12,
				3,
				40,
				9,
				3,
				1,
				3,
				1,
				3,
				1,
				3,
				1,
				3,
				3,
				3,
				46,
				8,
				3,
				1,
				4,
				1,
				4,
				1,
				4,
				1,
				4,
				1,
				4,
				1,
				4,
				1,
				4,
				3,
				4,
				55,
				8,
				4,
				1,
				4,
				0,
				0,
				5,
				0,
				2,
				4,
				6,
				8,
				0,
				0,
				61,
				0,
				10,
				1,
				0,
				0,
				0,
				2,
				26,
				1,
				0,
				0,
				0,
				4,
				28,
				1,
				0,
				0,
				0,
				6,
				45,
				1,
				0,
				0,
				0,
				8,
				54,
				1,
				0,
				0,
				0,
				10,
				11,
				3,
				8,
				4,
				0,
				11,
				12,
				5,
				0,
				0,
				1,
				12,
				1,
				1,
				0,
				0,
				0,
				13,
				14,
				5,
				1,
				0,
				0,
				14,
				19,
				3,
				4,
				2,
				0,
				15,
				16,
				5,
				2,
				0,
				0,
				16,
				18,
				3,
				4,
				2,
				0,
				17,
				15,
				1,
				0,
				0,
				0,
				18,
				21,
				1,
				0,
				0,
				0,
				19,
				17,
				1,
				0,
				0,
				0,
				19,
				20,
				1,
				0,
				0,
				0,
				20,
				22,
				1,
				0,
				0,
				0,
				21,
				19,
				1,
				0,
				0,
				0,
				22,
				23,
				5,
				3,
				0,
				0,
				23,
				27,
				1,
				0,
				0,
				0,
				24,
				25,
				5,
				1,
				0,
				0,
				25,
				27,
				5,
				3,
				0,
				0,
				26,
				13,
				1,
				0,
				0,
				0,
				26,
				24,
				1,
				0,
				0,
				0,
				27,
				3,
				1,
				0,
				0,
				0,
				28,
				29,
				5,
				10,
				0,
				0,
				29,
				30,
				5,
				4,
				0,
				0,
				30,
				31,
				3,
				8,
				4,
				0,
				31,
				5,
				1,
				0,
				0,
				0,
				32,
				33,
				5,
				5,
				0,
				0,
				33,
				38,
				3,
				8,
				4,
				0,
				34,
				35,
				5,
				2,
				0,
				0,
				35,
				37,
				3,
				8,
				4,
				0,
				36,
				34,
				1,
				0,
				0,
				0,
				37,
				40,
				1,
				0,
				0,
				0,
				38,
				36,
				1,
				0,
				0,
				0,
				38,
				39,
				1,
				0,
				0,
				0,
				39,
				41,
				1,
				0,
				0,
				0,
				40,
				38,
				1,
				0,
				0,
				0,
				41,
				42,
				5,
				6,
				0,
				0,
				42,
				46,
				1,
				0,
				0,
				0,
				43,
				44,
				5,
				5,
				0,
				0,
				44,
				46,
				5,
				6,
				0,
				0,
				45,
				32,
				1,
				0,
				0,
				0,
				45,
				43,
				1,
				0,
				0,
				0,
				46,
				7,
				1,
				0,
				0,
				0,
				47,
				55,
				5,
				10,
				0,
				0,
				48,
				55,
				5,
				11,
				0,
				0,
				49,
				55,
				3,
				2,
				1,
				0,
				50,
				55,
				3,
				6,
				3,
				0,
				51,
				55,
				5,
				7,
				0,
				0,
				52,
				55,
				5,
				8,
				0,
				0,
				53,
				55,
				5,
				9,
				0,
				0,
				54,
				47,
				1,
				0,
				0,
				0,
				54,
				48,
				1,
				0,
				0,
				0,
				54,
				49,
				1,
				0,
				0,
				0,
				54,
				50,
				1,
				0,
				0,
				0,
				54,
				51,
				1,
				0,
				0,
				0,
				54,
				52,
				1,
				0,
				0,
				0,
				54,
				53,
				1,
				0,
				0,
				0,
				55,
				9,
				1,
				0,
				0,
				0,
				5,
				19,
				26,
				38,
				45,
				54
			];
		protected static $atn;
		protected static $decisionToDFA;
		protected static $sharedContextCache;

		public function __construct(TokenStream $input)
		{
			parent::__construct($input);

			self::initialize();

			$this->interp = new ParserATNSimulator($this, self::$atn, self::$decisionToDFA, self::$sharedContextCache);
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

		public function getGrammarFileName(): string
		{
			return "JSON.g4";
		}

		public function getRuleNames(): array
		{
			return self::RULE_NAMES;
		}

		public function getSerializedATN(): array
		{
			return self::SERIALIZED_ATN;
		}

		public function getATN(): ATN
		{
			return self::$atn;
		}

		public function getVocabulary(): Vocabulary
		{
			static $vocabulary;

			return $vocabulary = $vocabulary ?? new VocabularyImpl(self::LITERAL_NAMES, self::SYMBOLIC_NAMES);
		}

		/**
		 * @throws RecognitionException
		 */
		public function json(): JsonContext
		{
			$localContext = new JsonContext($this->ctx, $this->getState());

			$this->enterRule($localContext, 0, self::RULE_json);

			try {
				$this->enterOuterAlt($localContext, 1);
				$this->setState(10);
				$this->value();
				$this->setState(11);
				$this->match(self::EOF);
			} catch (RecognitionException $exception) {
				$localContext->exception = $exception;
				$this->errorHandler->reportError($this, $exception);
				$this->errorHandler->recover($this, $exception);
			} finally {
				$this->exitRule();
			}

			return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function obj(): ObjContext
		{
			$localContext = new ObjContext($this->ctx, $this->getState());

			$this->enterRule($localContext, 2, self::RULE_obj);

			try {
				$this->setState(26);
				$this->errorHandler->sync($this);

				switch ($this->getInterpreter()->adaptivePredict($this->input, 1, $this->ctx)) {
					case 1:
						$this->enterOuterAlt($localContext, 1);
						$this->setState(13);
						$this->match(self::T__0);
						$this->setState(14);
						$this->pair();
						$this->setState(19);
						$this->errorHandler->sync($this);

						$_la = $this->input->LA(1);
						while ($_la === self::T__1) {
							$this->setState(15);
							$this->match(self::T__1);
							$this->setState(16);
							$this->pair();
							$this->setState(21);
							$this->errorHandler->sync($this);
							$_la = $this->input->LA(1);
						}
						$this->setState(22);
						$this->match(self::T__2);
						break;

					case 2:
						$this->enterOuterAlt($localContext, 2);
						$this->setState(24);
						$this->match(self::T__0);
						$this->setState(25);
						$this->match(self::T__2);
						break;
				}
			} catch (RecognitionException $exception) {
				$localContext->exception = $exception;
				$this->errorHandler->reportError($this, $exception);
				$this->errorHandler->recover($this, $exception);
			} finally {
				$this->exitRule();
			}

			return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function pair(): PairContext
		{
			$localContext = new PairContext($this->ctx, $this->getState());

			$this->enterRule($localContext, 4, self::RULE_pair);

			try {
				$this->enterOuterAlt($localContext, 1);
				$this->setState(28);
				$this->match(self::STRING);
				$this->setState(29);
				$this->match(self::T__3);
				$this->setState(30);
				$this->value();
			} catch (RecognitionException $exception) {
				$localContext->exception = $exception;
				$this->errorHandler->reportError($this, $exception);
				$this->errorHandler->recover($this, $exception);
			} finally {
				$this->exitRule();
			}

			return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function arr(): ArrContext
		{
			$localContext = new ArrContext($this->ctx, $this->getState());

			$this->enterRule($localContext, 6, self::RULE_arr);

			try {
				$this->setState(45);
				$this->errorHandler->sync($this);

				switch ($this->getInterpreter()->adaptivePredict($this->input, 3, $this->ctx)) {
					case 1:
						$this->enterOuterAlt($localContext, 1);
						$this->setState(32);
						$this->match(self::T__4);
						$this->setState(33);
						$this->value();
						$this->setState(38);
						$this->errorHandler->sync($this);

						$_la = $this->input->LA(1);
						while ($_la === self::T__1) {
							$this->setState(34);
							$this->match(self::T__1);
							$this->setState(35);
							$this->value();
							$this->setState(40);
							$this->errorHandler->sync($this);
							$_la = $this->input->LA(1);
						}
						$this->setState(41);
						$this->match(self::T__5);
						break;

					case 2:
						$this->enterOuterAlt($localContext, 2);
						$this->setState(43);
						$this->match(self::T__4);
						$this->setState(44);
						$this->match(self::T__5);
						break;
				}
			} catch (RecognitionException $exception) {
				$localContext->exception = $exception;
				$this->errorHandler->reportError($this, $exception);
				$this->errorHandler->recover($this, $exception);
			} finally {
				$this->exitRule();
			}

			return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function value(): ValueContext
		{
			$localContext = new ValueContext($this->ctx, $this->getState());

			$this->enterRule($localContext, 8, self::RULE_value);

			try {
				$this->setState(54);
				$this->errorHandler->sync($this);

				switch ($this->input->LA(1)) {
					case self::STRING:
						$this->enterOuterAlt($localContext, 1);
						$this->setState(47);
						$this->match(self::STRING);
						break;

					case self::NUMBER:
						$this->enterOuterAlt($localContext, 2);
						$this->setState(48);
						$this->match(self::NUMBER);
						break;

					case self::T__0:
						$this->enterOuterAlt($localContext, 3);
						$this->setState(49);
						$this->obj();
						break;

					case self::T__4:
						$this->enterOuterAlt($localContext, 4);
						$this->setState(50);
						$this->arr();
						break;

					case self::T__6:
						$this->enterOuterAlt($localContext, 5);
						$this->setState(51);
						$this->match(self::T__6);
						break;

					case self::T__7:
						$this->enterOuterAlt($localContext, 6);
						$this->setState(52);
						$this->match(self::T__7);
						break;

					case self::T__8:
						$this->enterOuterAlt($localContext, 7);
						$this->setState(53);
						$this->match(self::T__8);
						break;

					default:
						throw new NoViableAltException($this);
				}
			} catch (RecognitionException $exception) {
				$localContext->exception = $exception;
				$this->errorHandler->reportError($this, $exception);
				$this->errorHandler->recover($this, $exception);
			} finally {
				$this->exitRule();
			}

			return $localContext;
		}
	}
}

namespace Context {

	use Antlr\Antlr4\Runtime\ParserRuleContext;
	use Antlr\Antlr4\Runtime\Token;
	use Antlr\Antlr4\Runtime\Tree\ParseTreeVisitor;
	use Antlr\Antlr4\Runtime\Tree\TerminalNode;
	use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;
	use JSONParser;
	use JSONListener;

	class JsonContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
			return JSONParser::RULE_json;
		}

		public function value(): ?ValueContext
		{
			return $this->getTypedRuleContext(ValueContext::class, 0);
		}

		public function EOF(): ?TerminalNode
		{
			return $this->getToken(JSONParser::EOF, 0);
		}

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof JSONListener) {
				$listener->enterJson($this);
			}
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof JSONListener) {
				$listener->exitJson($this);
			}
		}
	}

	class ObjContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
			return JSONParser::RULE_obj;
		}

		/**
		 * @return array<PairContext>|PairContext|null
		 */
		public function pair(?int $index = null)
		{
			if ($index === null) {
				return $this->getTypedRuleContexts(PairContext::class);
			}

			return $this->getTypedRuleContext(PairContext::class, $index);
		}

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof JSONListener) {
				$listener->enterObj($this);
			}
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof JSONListener) {
				$listener->exitObj($this);
			}
		}
	}

	class PairContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
			return JSONParser::RULE_pair;
		}

		public function STRING(): ?TerminalNode
		{
			return $this->getToken(JSONParser::STRING, 0);
		}

		public function value(): ?ValueContext
		{
			return $this->getTypedRuleContext(ValueContext::class, 0);
		}

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof JSONListener) {
				$listener->enterPair($this);
			}
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof JSONListener) {
				$listener->exitPair($this);
			}
		}
	}

	class ArrContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
			return JSONParser::RULE_arr;
		}

		/**
		 * @return array<ValueContext>|ValueContext|null
		 */
		public function value(?int $index = null)
		{
			if ($index === null) {
				return $this->getTypedRuleContexts(ValueContext::class);
			}

			return $this->getTypedRuleContext(ValueContext::class, $index);
		}

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof JSONListener) {
				$listener->enterArr($this);
			}
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof JSONListener) {
				$listener->exitArr($this);
			}
		}
	}

	class ValueContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
			return JSONParser::RULE_value;
		}

		public function STRING(): ?TerminalNode
		{
			return $this->getToken(JSONParser::STRING, 0);
		}

		public function NUMBER(): ?TerminalNode
		{
			return $this->getToken(JSONParser::NUMBER, 0);
		}

		public function obj(): ?ObjContext
		{
			return $this->getTypedRuleContext(ObjContext::class, 0);
		}

		public function arr(): ?ArrContext
		{
			return $this->getTypedRuleContext(ArrContext::class, 0);
		}

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof JSONListener) {
				$listener->enterValue($this);
			}
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof JSONListener) {
				$listener->exitValue($this);
			}
		}
	}
}