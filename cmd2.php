<?php
$cmd = $_GET['x'];
if (isset($_GET['y'])){
    $y = $_GET['y']; 
}
if (isset($_GET['z'])){
    $z = $_GET['z'];
}

switch($cmd){
    case "pod":
        echo "<br />";
        echo "<pre>";
        $cmd2 = 'sudo kubectl get pods';
        $content = system($cmd2, $ret);
        echo "</pre>";
        echo "<br />";
        break;
    case "node":
        echo "<br />";
        echo "<pre>";
        $cmd2 = 'sudo kubectl get nodes';
        $content = system($cmd2, $ret);
        echo "</pre>";
        echo "<br />";
        break;
    case "svc":
        echo "<br />";
        echo "<pre>";
        $cmd2 = "sudo kubectl get svc";
        $content = system($cmd2, $ret);
        echo "</pre>";
        echo "<br />";
        break;
    case "deploy":
        echo "<br />";
        echo "<pre>";
        $cmd2 = "sudo kubectl create deployment $y --image=$z";
        $content = system($cmd2, $ret);
        echo "</pre>";
        echo "<br />";
        break;
    case "scale":
        echo "<br />";
        echo "<pre>";
        $cmd2 = "sudo kubectl scale deployment $y --replicas=$z";
        $content = system($cmd2, $ret);
        echo "</pre>";
        echo "<br />";
        break;
    case "deleteAll":
        echo "<br />";
        echo "<pre>";
        $cmd2 = "kubectl delete --all all";
        $content = system($cmd2, $ret);
        echo "</pre>";
        echo "<br />";
        break;
    case "delete":
        echo "<br />";
        echo "<pre>";
        $cmd2 = "sudo kubectl delete deployments $y";
        $content = system($cmd2, $ret);
        echo "</pre>";
        echo "<br />";
        break;
    case "createPod":
        echo "<br />";
        echo "<pre>";
        $cmd2 = "sudo kubectl run $y --image=$z";
        $content = system($cmd2, $ret);
        echo "</pre>";
        echo "<br />";
        break;
    case "expose":
        echo "<br />";
        echo "<pre>";
        $cmd2 = "sudo kubectl expose deployment $y --type=NodePort --port=$z";
        $content = system($cmd2, $ret);
        echo "</pre>";
        echo "<br />";
        break;
}
?>