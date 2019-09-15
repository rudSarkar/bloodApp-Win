<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RequestBlood extends Model
{
  public function getDivName()
  {
      return Division::where('id', $this->division)->first()->name;
  }
  public function getDisName()
  {
      return District::where('id', $this->district)->first()->name;
  }
  public function getUpaName()
  {
      return Upazila::where('id', $this->upazila)->first()->name;
  }
}
