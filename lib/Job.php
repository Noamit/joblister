<?php

class Job {
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function getAllJobs() {
        $sql = "SELECT jobs.* , categories.name AS cname
                FROM jobs INNER JOIN categories 
                ON jobs.category_id = categories.id
                ORDER BY post_date DESC";
                
        $this->db->query($sql);

        // Assign Result set
        $result = $this->db->resultSet();
        return $result;
    }

    public function getJobsByCategory($category_id) {
        $sql = "SELECT jobs.* , categories.name AS cname
                FROM jobs INNER JOIN categories 
                ON jobs.category_id = categories.id
                Where jobs.category_id = $category_id
                ORDER BY post_date DESC";
                
        $this->db->query($sql);

        // Assign Result set
        $result = $this->db->resultSet();
        return $result;
    }

    public function getCategories() {
        $sql = "SELECT * FROM categories";
                
        $this->db->query($sql);

        // Assign Result set
        $result = $this->db->resultSet();
        return $result;
    }

    public function getCategory($category_id) {
        $sql = "SELECT * FROM categories WHERE id = :category_id";
        $this->db->query($sql);
        $this->db->bind(':category_id', $category_id);
        $row = $this->db->single();
        return $row;

        // // without bind
        // $sql = "SELECT * FROM categories WHERE id = $category_id";
        // $this->db->query($sql);
        // $row = $this->db->single();
        // return $row;
    }

    public function getJob($job_id) {
        $sql = "SELECT * FROM jobs WHERE id = :job_id";
        $this->db->query($sql);
        $this->db->bind(':job_id', $job_id);
        $row = $this->db->single();
        return $row;
    }

    public function createJob($data) {

        $columns = implode(', ', array_keys($data));
        $values = "'" . implode("', '", $data) . "'";

        $sql = "INSERT INTO jobs ($columns) VALUES ($values);";
        $this->db->query($sql);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
        
    }

    public function updateJob($job_id, $data) {
        $set = array();

        foreach ($data as $column => $value) {
            $set[] = "$column = '$value'";
        }

        $set = implode (', ' , $set);
        $sql = "UPDATE jobs SET $set WHERE id=$job_id";
        $this->db->query($sql);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function deleteJob($job_id) {
        $sql = "DELETE FROM jobs WHERE id = $job_id";
        $this->db->query($sql);
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }



}