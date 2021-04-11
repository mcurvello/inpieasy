package com.inpieasy.entities;

import java.io.Serializable;

import javax.persistence.Entity;
import javax.persistence.GeneratedValue;
import javax.persistence.GenerationType;
import javax.persistence.Id;
import javax.persistence.Table;


@Entity
@Table(name = "tb_defiance")
public class Defiance implements Serializable {
	
	private static final long serialVersionUID = 1L;
	
	@Id
	@GeneratedValue(strategy = GenerationType.IDENTITY)
	private Long id;
	private String title;
	private String description;
	private String responseA;
	private String responseB;
	private DefianceStatus status; 
	private Step step;
	
	public Defiance() {
		
	}

	public Defiance(Long id, String title, String description, String responseA, String responseB, DefianceStatus status, Step step) {
		super();
		this.id = id;
		this.title = title;
		this.description = description;
		this.responseA = responseA;
		this.responseB = responseB;
		this.status = status;
		this.step = step;
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

	@Override
	public int hashCode() {
		final int prime = 31;
		int result = 1;
		result = prime * result + ((id == null) ? 0 : id.hashCode());
		return result;
	}

	@Override
	public boolean equals(Object obj) {
		if (this == obj)
			return true;
		if (obj == null)
			return false;
		if (getClass() != obj.getClass())
			return false;
		Defiance other = (Defiance) obj;
		if (id == null) {
			if (other.id != null)
				return false;
		} else if (!id.equals(other.id))
			return false;
		return true;
	}
	
}
