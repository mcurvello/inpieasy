package com.inpieasy.repositories;

import org.springframework.data.jpa.repository.JpaRepository;

import com.inpieasy.entities.User;

public interface UserRepository extends JpaRepository<User, Long>{

}
