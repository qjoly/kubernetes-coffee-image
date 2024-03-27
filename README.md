# Simple test for Kubernetes

## Description

This is a bundle of simple tests for Kubernetes for testing deployments of different types of applications (kustomize, helm, raw yaml, etc).

## Applications

| Application | Description | Installation | Image |
| ----------- | ----------- | ------------ | ----- |
| Simple Web App | A simple web application that show its IP and hostname | Use Helm `helm install simple-web-app ./simple/chart/` | `qjoly/kubernetes-coffee-image:simple` |
| Micro service | An application composed of two microservices, one for the frontend and the second contacted by the first one | Use directly `kubectl apply` | `qjoly/kubernetes-coffee-image:frontend` and `qjoly/kubernetes-coffee-image:api` |  
| Evil Tea | An application that show all pods inside the cluster (use to simulate a security breach) | Use Kustomize `kubectl apply -k evil-tea/kustomize` | `qjoly/kubernetes-coffee-image:evil` |
| Versioned-Coffee | An application that shows x cups of coffee  | `helm install multiversion ./multiversions/chart --set image.tag=v1.1` | `qjoly/kubernetes-coffee-image:v1.x` |

---

In applications `Simple Web App` and `Micro service`, the HTML code is based on the [CSS Coffee Filling Loader Animation](https://github.com/hosseinnabi-ir/CSS-Coffee-Filling-Loader-Animation) from [hosseinnabi-ir](https://github.com/hosseinnabi-ir/)
