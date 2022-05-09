<?php declare(strict_types=1);

namespace Persist;


trait IteratorTrait {
  /* #region Iterator */
  /** @var bool $valid true if a valid object */
  private bool $valid = false;
  
	public function current ( ): object { return $this; }
	public function key ( ): mixed	{ return $this-> {$this->getPrimaryKey()} ; }
	public function valid ( ): bool { return $this-> valid; }
	public function next ( ): void { $this-> findNext(); }
	public function rewind ( ): void { $this-> findFirst(); }
  /* #endregion */
};