<?php
use app\Classes\DeadlineTask;
use app\Classes\TaggedDeadlineTask;

include 'autoloader.php';

$task1 = new TaggedDeadlineTask('Task1', 'Finish within a week', '11/10/23', '18/10/23', 'High');

$task1->addTag('dahsboard');
$task1->addTag('backend');
$task1->addAssignee('Azmain');
$task1->addAssignee('Mithila');
$task1->changeStatus();

$task2 = new DeadlineTask('Task2', "Finish within monday", '12/10/23', '16/10/23', 'Mid');
$task2->addAssignee('Zitu');
$task2->addAssignee('Raihan');

$tasks = [$task1, $task2];
foreach ($tasks as $task) {
    echo "Task Name: " . $task->getName() . PHP_EOL;
    echo "Description: " . $task->getDescription() . PHP_EOL;
    echo "Start Date: " . $task->getStartDate() . PHP_EOL;
    echo "Due Date: " . $task1->getDueDate() . PHP_EOL;

    if ($task instanceof TaggedDeadlineTask) {
        echo "Tags: " . implode(', ', $task->getTags()) . PHP_EOL;
    }
    echo "Assignees: " . implode(', ',$task->getAssignees()).PHP_EOL; 
    echo "Priority: " . $task->getPriority().PHP_EOL;
    echo "Status: ". ($task->isFinished() ? "Finished" : "Yet to be Finished").PHP_EOL;
    echo "\n\n";
}

?>