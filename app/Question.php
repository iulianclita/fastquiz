<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Sofa\Eloquence\Eloquence;
use App\Services\HasCategory;
use App\Services\RandomSelect;
use App\Services\CheckStatus;

class Question extends Model
{
    use Eloquence, HasCategory, RandomSelect, CheckStatus;
	
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'questions';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['description', 'choice_a', 'choice_b', 'choice_c', 'choice_d', 'correct', 'category_id', 'status'];

    /**
     * The colums that are searchable.
     * No need for this, but you can define default searchable columns.
     *
     * @var array
     */
   protected $searchableColumns = ['description'];

	/**
     * The number of questions per page on the private area.
     *
     * @constant ITEMS_PER_PAGE int
     */
    const ITEMS_PER_PAGE = 10;

	/**
	 * Get the name of this resource.
	 *
	 * @return string
	 */
    public function getResourceName()
    {
    	return trans('home.resources.question');
    }

	/**
	 * Get all the available choices.
	 *
	 * @return array
	 */
    public function getChoices()
    {
    	$choices = ['a' => $this->choice_a, 
    				'b' => $this->choice_b, 
    				'c' => $this->choice_c, 
    				'd' => $this->choice_d];

    	shuffle_assoc($choices);

    	return $choices;
    }

	/**
	 * Get the correct answer for this Question.
	 *
	 * @return string
	 */
    public function getAnswer()
    {
    	$choice = 'choice_' . $this->correct;

    	return $this->{$choice};
    }

	/**
	 * Get a temporary alias for this Question.
	 *
	 * @return string
	 */
    public function getTemporaryAlias()
    {
    	return uniqid(true) . $this->id . str_random(10);
    }

	/**
	 * The Question can belong to only one Category.
	 *
	 * @return Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function category()
	{
		return $this->belongsTo(Category::class);
	}

	/**
	 * The Question can belong to only one User.
	 *
	 * @return Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function user()
	{
		return $this->belongsTo(User::class);
	}
}
