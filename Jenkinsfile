pipeline {
    agent any

    tools {
        maven 'Maven3' // Exact name from Jenkins
        jdk 'JDK17'    // Exact name from Jenkins
    }

    environment {
        SONARQUBE = 'SonarQube'         // Your SonarQube server name in Jenkins
        SONAR_TOKEN = credentials('SONAR_TOKENS') // Jenkins credential ID for SonarQube token
    }
    stages {
        stage('Checkout') {
            steps {
                git(
                    url: 'https://github.com/praveenj89/jenkins-sonar.git',
                    branch: 'main',
                    credentialsId: 'github-creds'
                )
            }
        }
        stage('Build') {
            steps {
                // Run Maven build
                sh 'mvn clean install'
            }
        }
        stage('SonarQube Scan') {
            steps {
                withSonarQubeEnv("${SONARQUBE}") {
                    // Explicit plugin version and token authentication
                    sh "mvn org.sonarsource.scanner.maven:sonar-maven-plugin:4.0.0.4121:sonar -Dsonar.login=${SONAR_TOKEN}"
                }
            }
        }
    }
    post {
        success {
            echo 'Pipeline completed successfully!'
        }
        failure {
            echo 'Pipeline failed! Please check the Git repository, branch, and SonarQube authentication.'
        }
    }
}
