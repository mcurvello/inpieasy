package com.inpieasy.dto;

import java.io.Serializable;

import com.inpieasy.entities.Defiance;
import com.inpieasy.entities.DefianceStatus;
import com.inpieasy.entities.Step;

public class DefianceDTO implements Serializable {
	
	private static final long serialVersionUID = 1L;

	private Long id;
	private String title;
	private String description;
	private String responseA;
	private String responseB;
	private DefianceStatus status; 
	private Step step;
	
	public DefianceDTO() {
		
	}

	public DefianceDTO(Long id, String title, String description, String responseA, String responseB,
			DefianceStatus status, Step step) {
		this.id = id;
		this.title = title;
		this.description = description;
		this.responseA = responseA;
		this.responseB = responseB;
		this.status = status;
		this.step = step;
	}
	
	public DefianceDTO(Defiance entity) {
		id = entity.getId();
		title = entity.getTitle();
		description = entity.getDescription();
		responseA = entity.getResponseA();
		responseB = entity.getResponseB();
		status = entity.getStatus();
		step = entity.getStep();
	}

	public Long getId() {
		return id;
	}

	public void setId(Long id) {
		this.id = id;
	}

	public String getTitle() {
		return title;
	}

	public void setTitle(String title) {
		this.title = title;
	}

	public String getDescription() {
		return description;
	}

	public void setDescription(String description) {
		this.description = description;
	}

	public String getResponseA() {
		return responseA;
	}

	public void setResponseA(String responseA) {
		this.responseA = responseA;
	}

	public String getResponseB() {
		return responseB;
	}

	public void setResponseB(String responseB) {
		this.responseB = responseB;
	}

	public DefianceStatus getStatus() {
		return status;
	}

	public void setStatus(DefianceStatus status) {
		this.status = status;
	}

	public Step getStep() {
		return step;
	}

	public void setStep(Step step) {
		this.step = step;
	}
	
}
