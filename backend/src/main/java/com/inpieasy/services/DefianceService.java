package com.inpieasy.services;

import java.util.List;
import java.util.stream.Collectors;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;
import org.springframework.transaction.annotation.Transactional;

import com.inpieasy.dto.DefianceDTO;
import com.inpieasy.entities.Defiance;
import com.inpieasy.repositories.DefianceRepository;


@Service
public class DefianceService {

	@Autowired
	private DefianceRepository repository;
	
	@Transactional(readOnly = true)
	public List<DefianceDTO> findAll(){
		
		List<Defiance> list = repository.findAll();
		return list.stream().map(x -> new DefianceDTO(x)).collect(Collectors.toList());
	}
}
