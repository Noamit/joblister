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

        $sql = "INSERT INTO jobs (category_id, job_title, comapny, description, location, salary, contact_user, contact_email) 
                VALUES (:category_id, :job_title, :comapny, :description, :location, :salary, :contact_user, :contact_email)";
        $this->db->query($sql);

        $this->db->bind(':category_id', $data['category_id']);
        $this->db->bind(':job_title', $data['job_title']);
        $this->db->bind(':comapny', $data['comapny']);
        $this->db->bind(':description', $data['description']);
        $this->db->bind(':location', $data['location']);
        $this->db->bind(':salary', $data['salary']);
        $this->db->bind(':contact_user', $data['contact_user']);
        $this->db->bind(':contact_email', $data['contact_email']);

        if ($this->db->execute()) {
            return true;
        }
        return false;

    }
}