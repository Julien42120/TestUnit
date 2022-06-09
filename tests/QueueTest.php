<?php

use PHPUnit\Framework\TestCase;

class QueueTest extends TestCase {

    protected $queue;

    protected function setUp() :void {
        $this->queue = new Queue;
    }

    public function testNewQueueIsEmpty() {
        $queue = $this->setUp();
        $this->assertEmpty($queue);
    }
    

    public function testAnItemIsAddedToTheQueue() {
        $item = ['Julien'];
        $queue = new Queue;
        $queue->push($item);
        $count = $queue->getCount();
        $this->assertSame(1, $count);
    }

    public function testAnItemIsRemovedFromTheQueue() { 
        $queue = new Queue;
        $queue->push('Julien');
        $queue->clear();
        $count= $queue->getCount();
        $this->assertSame(0, $count);
    }

    public function testAnItemIsRemovedFromTheFrontOfTheQueue() {
        $queue = new Queue;
        $queue->push('Jean');
        $queue->push('Elea');
        $queue->pop();
        $count = $queue->getCount();
        $this->assertSame(1, $count);
    }


    public function testMaxNumberOfItemsCanBeAdded() {
        $queue = new Queue;

        $queue->push('Julien');
        $queue->push('Jean');
        $queue->push('Elea');
        $queue->push('Ronan');
        $queue->push('Maxime');

        $count = $queue->getCount();
        $this->assertSame(5, $count);
    }
    
    public function testExceptionThrownWhenAddingAnItemToAFullQueue()
    {
        $queue = new Queue;

        try {
             $queue->push('Julien');
            $queue->push('Jean');
            $queue->push('Elea');
            $queue->push('Ronan');
            $queue->push('Maxime');
            $queue->push('Basile');
        } catch(Exception $error) {
            $this->assertSame($error->getMessage(), "Queue is full");
        }
        return $queue;
       

    }      
}