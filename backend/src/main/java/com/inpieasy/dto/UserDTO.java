package com.inpieasy.dto;

import java.io.Serializable;
import java.util.ArrayList;
import java.util.List;
import java.util.stream.Collectors;

import com.inpieasy.entities.User;

public class UserDTO implements Serializable {
	
	private static final long serialVersionUID = 1L;

	private Long id;
	private String name;
	private String email;
	private String phoneNumber;
	private String cellPhone;
	private String username;
	private String password;
	
	private List<DefianceDTO> defiances = new ArrayList<>();
	
	public UserDTO() {
		
	}

	public UserDTO(Long id, String name, String email, String phoneNumber, String cellPhone, String username,
			String password) {
		this.id = id;
		this.name = name;
		this.email = email;
		this.phoneNumber = phoneNumber;
		this.cellPhone = cellPhone;
		this.username = username;
		this.password = password;
	}

	public UserDTO(User entity) {
		id = entity.getId();
		name = entity.getName();
		email = entity.getEmail();
		phoneNumber = entity.getPhoneNumber();
		cellPhone = entity.getCellPhone();
		username = entity.getUsername();
		password = entity.getPassword();
		defiances = entity.getDefiances().stream().map(x -> new DefianceDTO(x)).collect(Collectors.toList());
	}

	public Long getId() {
		return id;
	}

	public void setId(Long id) {
		this.id = id;
	}

	public String getName() {
		return name;
	}

	public void setName(String name) {
		this.name = name;
	}

	public String getEmail() {
		return email;
	}

	public void setEmail(String email) {
		this.email = email;
	}

	public String getPhoneNumber() {
		return phoneNumber;
	}

	public void setPhoneNumber(String phoneNumber) {
		this.phoneNumber = phoneNumber;
	}

	public String getCellPhone() {
		return cellPhone;
	}

	public void setCellPhone(String cellPhone) {
		this.cellPhone = cellPhone;
	}

	public String getUsername() {
		return username;
	}

	public void setUsername(String username) {
		this.username = username;
	}

	public String getPassword() {
		return password;
	}

	public void setPassword(String password) {
		this.password = password;
	}

	public List<DefianceDTO> getDefiances() {
		return defiances;
	}

}
