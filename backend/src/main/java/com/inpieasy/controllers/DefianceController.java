package com.inpieasy.controllers;

import java.util.List;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.http.ResponseEntity;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RestController;

import com.inpieasy.dto.DefianceDTO;
import com.inpieasy.services.DefianceService;

@RestController
@RequestMapping(value = "/defiances")
public class DefianceController {
	
	@Autowired
	private DefianceService service;
	
	@GetMapping
	public ResponseEntity<List<DefianceDTO>> findAll(){
		List<DefianceDTO> list = service.findAll();
		return ResponseEntity.ok().body(list);
	}
}
