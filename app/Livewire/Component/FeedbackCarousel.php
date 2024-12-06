<?php

namespace App\Livewire\Component;

use App\Models\Feedback;
use Livewire\Component;

class FeedbackCarousel extends Component
{
    public $feedbacks;
    public $slideNo = 0;

    public function mount(){
        $this->feedbacks = Feedback::all();
    }

    public function nextSlide(){
        if ($this->slideNo < count($this->feedbacks) - 3) {
            $this->slideNo++;
        } else {
            $this->slideNo = 0;
        }
    }

    public function prevSlide(){
        if ($this->slideNo > 0){
            $this->slideNo--;
        } else {
            $this->slideNo = count($this->feedbacks) - 3;
        }
    }

    public function render()
    {
        $currentFeedbacks = array_slice($this->feedbacks->toArray(), $this->slideNo, 3);

        return view('livewire.component.feedback-carousel', ['feedbacks' => $currentFeedbacks]);
    }
}

