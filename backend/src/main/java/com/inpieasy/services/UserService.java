package com.inpieasy.services;

import java.util.List;
import java.util.stream.Collectors;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;
import org.springframework.transaction.annotation.Transactional;

import com.inpieasy.dto.DefianceDTO;
import com.inpieasy.dto.UserDTO;
import com.inpieasy.entities.Defiance;
import com.inpieasy.entities.User;
import com.inpieasy.repositories.DefianceRepository;
import com.inpieasy.repositories.UserRepository;


@Service
public class UserService {

	@Autowired
	private UserRepository repository;
	
	@Autowired
	private DefianceRepository defianceRepository;
	
	@Transactional(readOnly = true)
	public List<UserDTO> findAll(){
		
		List<User> list = repository.findAll();
		return list.stream().map(x -> new UserDTO(x)).collect(Collectors.toList());
	}
	
	@Transactional
	public UserDTO insert(UserDTO dto){
		
		User user = new User(null, dto.getName(), dto.getEmail(), dto.getPhoneNumber(), dto.getCellPhone(), dto.getUsername(), dto.getPassword());
		for (DefianceDTO d : dto.getDefiances()) {
			Defiance defiance = defianceRepository.getOne(d.getId());
			user.getDefiances().add(defiance);
		}
		user = repository.save(user);
		return new UserDTO(user);
	}
	
}
