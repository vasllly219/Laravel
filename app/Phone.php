<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    /**
   * Связанная с моделью таблица.
   *
   * @var string
   */
  protected $table = 'phones';
  /**
   * Определяет необходимость отметок времени для модели.
   *
   * @var bool
   */
  public $timestamps = false;
}
