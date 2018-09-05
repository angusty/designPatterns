<?php
namespace DesignPatterns\Pool;

use Countable;

class WorkerPool implements Countable
{
    private $occupiedWorkers = [];
    private $freeWorkers = [];
    public function __construct()
    {
//        $worker = new StringReverseWorker();
//        $this->freeWorkers[spl_object_hash($worker)] = $worker;
//        $worker = new StringReverseWorker();
//        $this->freeWorkers[spl_object_hash($worker)] = $worker;
//        $worker = new StringReverseWorker();
//        $this->freeWorkers[spl_object_hash($worker)] = $worker;
//        $worker = new StringReverseWorker();
//        $this->freeWorkers[spl_object_hash($worker)] = $worker;
    }

    public function count() : int
    {
        // TODO: Implement count() method.
        return count($this->occupiedWorkers) + count($this->freeWorkers);
    }

    /**
     *获取一个对象
     * @return StringReverseWorker
     */
    public function get() : StringReverseWorker
    {
        if (0 === count($this->freeWorkers)) {
            $worker = new StringReverseWorker();
        } else {
            $worker = array_pop($this->freeWorkers);
        }
        $this->occupiedWorkers[spl_object_hash($worker)] = $worker;
        return $worker;
    }

    /**
     * 收回一个对象
     * @param StringReverseWorker $worker
     */
    public function dispose(StringReverseWorker $worker)
    {
        $key = spl_object_hash($worker);
        if (isset($this->occupiedWorkers[$key])) {
            unset($this->occupiedWorkers[$key]);
            $this->freeWorkers[$key] = $worker;
        }
    }
}
